<?php

use Illuminate\Http\Request;
use GuzzleHttp\Client;

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