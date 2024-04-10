<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/jobs', function () {
    return view('jobs', [
        'greeting'=> 'Hello',
        'name'=> 'Alex',
        'jobs'=> [
            ['title' => 'Senior Developer',
            'salary' => '6000'],
            ['title'=> 'Junior Developer',
            'salary' => '4000'],
            ['title'=> 'AI Developer',
            'salary'=> '5000'],
        ],
    ]);
});