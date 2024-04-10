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
Route::get('/jobs/{id}', function ($id) {
    $jobs =[ 
            ['title' => 'Senior Developer',
            'id' => 1,
            'salary' => '6000'],
            ['title'=> 'Junior Developer',
            'id' => 2,
            'salary' => '4000'],
            ['title'=> 'AI Developer',
            'id' => 3,
            'salary'=> '5000'],
    ];
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id); //Arr interacts with arrays
    return view('job', ['job' => $job]);
});