<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id) {
        dd($id);
        $profile = Profile::find($id);
        return view('profile.show', $profile);
    }
}
