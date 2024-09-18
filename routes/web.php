<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => '1',
                'title' => 'Director',
                'salary' => '$50,000',
            ],
            [
                'id' => '2',
                'title' => 'Programmer',
                'salary' => '$10,000',
            ],
            [
                'id' => '3',
                'title' => 'Teacher',
                'salary' => '$40,000',
            ],
        ]
    ]);
});


Route::get('/jobs/{id}', function ($id) {
    $jobs = [
            [
                'id' => '1',
                'title' => 'Director',
                'salary' => '$50,000',
            ],
            [
                'id' => '2',
                'title' => 'Programmer',
                'salary' => '$10,000',
            ],
            [
                'id' => '3',
                'title' => 'Teacher',
                'salary' => '$40,000',
            ],
        ];
        // Laravel shorthand to search an array for a value - Relies on 'use Illuminate\Support\Arr;' being imported at the top or can be used inline with the code
        $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

        // Uses 'id' value assigned to $job above to get array for view
        return view('job', ['job' => $job]);
    });


Route::get('/contact', function () {
    return view('contact');
});
