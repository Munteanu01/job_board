<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'greeting'=> 'Hello',
        'name'=> 'Alex',
        'jobs'=> [
            ['title' => 'Senior Developer',
            'id' => '1',
            'salary' => '6000'],
            ['title'=> 'Junior Developer',
            'id' => '2',
            'salary' => '4000'],
            ['title'=> 'AI Developer',
            'id' => '3',
            'salary'=> '5000'],
        ],
    ]);
});
