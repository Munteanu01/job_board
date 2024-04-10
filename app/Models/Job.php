<?php

namespace App\Models;
use Illuminate\Support\Arr;



class Job {
    public static function all(): array 
    { return [
        ['title' => 'Senior Developer',
        'id' => '1',
        'salary' => '6000'],
        ['title'=> 'Junior Developer',
        'id' => '2',
        'salary' => '4000'],
        ['title'=> 'AI Developer',
        'id' => '3',
        'salary'=> '5000'],
    ];
    }
    public static function find(int $id): array
    { 
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if (! $job) {
            abort(404);
        }
        return $job;
    }
}

