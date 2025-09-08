<?php

namespace App\Http\Controllers;

class AboutmeController extends Controller
{
    public function showMyName() {
        $myData = [
            'name' => 'Irzi',
            'age' => 19,
            'email' => 'test.gmail.com'
        ];

        return view('about-me', compact('myData'));
    }
}