<?php

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('search', function (Request $request) {
    $_YOUTUBE_API_KEY = 'AIzaSyC-zx7mRdw67od9k5ZsXu0VAjhw1Xjd4dM';
    $_YOUTUBE_API_URL = 'https://www.googleapis.com/youtube/v3/search';
    $_SPOTIFY_API_URL = 'https://api.spotify.com/v1/search';

    $client = new Client();

    $isYoutube = isset($request->all()['youtube']) && $request->all()['youtube'] == 1;
    $isSpotify = isset($request->all()['spotify']) && $request->all()['spotify'] == 1;

    $youtube = $client->getAsync($_YOUTUBE_API_URL, [
        'query' => [
            'part' => 'snippet',
            'q' => $request->all()['terms'],
            'key' => $_YOUTUBE_API_KEY,
            'type' => 'video',
            'maxResults' => 5
        ]
    ]);

    $spotify = $client->getAsync($_SPOTIFY_API_URL, [
        'query' => [
            'q' => $request->all()['terms'],
            'type' => 'track',
            'market'=> 'from_token',
            'limit' => 5
        ],
        'headers' => [
            'Authorization' => 'Bearer ' . (isset($request->all()['spotify_access_token']) ? $request->all()['spotify_access_token'] : '')
        ]
    ]);


    $promises = [];

    if ($isYoutube) {
        $promises['youtube'] = $youtube;
    }

    if ($isSpotify) {
        $promises['spotify'] = $spotify;
    }

    // Wait for the requests to complete, even if some of them fail
    $results = Promise\settle($promises)->wait();

    $response = [];

    if (isset($results['youtube']['value'])) {
        $response['youtube'] = json_decode($results['youtube']['value']->getBody())->items;
    }

    if (isset($results['spotify']['value'])) {
        $response['spotify'] =json_decode($results['spotify']['value']->getBody(), true)['tracks']['items'];
    }

    return $response;
});

// Gets an access token and refresh token based on authorization code
Route::get('token/{code}', function ($code) {
    $_CLIENT_ID = 'b1d0ae55ef794bec81b0e726ac4a7503';
    $_CLIENT_SECRET = '5473c72f2cd94dcf9027867d8f98cb42';
    $_REDIRECT_URI = 'https://www.browsertunes.com/thank-you';
    $_TOKEN_ENDPOINT = 'https://accounts.spotify.com/api/token';

    $client = new Client();
    $res = $client->request('POST', $_TOKEN_ENDPOINT, [
        'form_params' => [
            'grant_type' => 'authorization_code',
            'redirect_uri' => $_REDIRECT_URI,
            'code' => $code
        ],
        'headers' => [
            'Authorization' => 'Basic ' . base64_encode($_CLIENT_ID . ':' . $_CLIENT_SECRET)
        ]
    ]);

    return $res->getBody();
});


// Refreses the access token based on a refresh token
Route::get('token/refresh/{refreshToken}', function($refreshToken) {
    $_CLIENT_ID = 'b1d0ae55ef794bec81b0e726ac4a7503';
    $_CLIENT_SECRET = '5473c72f2cd94dcf9027867d8f98cb42';
    $_TOKEN_ENDPOINT = 'https://accounts.spotify.com/api/token';

    $client = new Client();
    $res = $client->request('POST', $_TOKEN_ENDPOINT, [
        'form_params' => [
            'grant_type' => 'refresh_token',
            'refresh_token' => $refreshToken,
        ],
        'headers' => [
            'Authorization' => 'Basic ' . base64_encode($_CLIENT_ID . ':' . $_CLIENT_SECRET)
        ]
    ]);

    return $res->getBody();
});