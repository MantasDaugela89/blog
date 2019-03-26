<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//Get gerai kad yra ifas, jei reikia turi funkcija
//Route::get('about', function () {
//    return view('about');
//});

Route::view('about', 'about'); // pirmas about tai adresas koks adreasas, antras about koks views file. Views trmpiau nei get
//Route::view('contact', 'contact'); // pirmas about tai adresas koks adreasas, antras about koks views file. Views trmpiau nei get

Route::get('contact', 'ContactController@index');

// Route::resource('posts', 'PostController');


Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/create', 'PostController@create')->name('posts.create');

Route::get('posts/{id}', 'PostController@show')->name('posts.show');











Route::get('program', function () {

    $name = 'Mantas Daugela';
    $profileimage = 'https://bucket.mlcdn.com/a/1332/1332954/images/b3775874dff84aad3209ed980cc0404308085070.jpeg';
    $activity = 'Active person';
    $hobbies = 'Board sports';


    $day1= [
        'Barbell Bench Press - Medium Grip',
        'Incline Dumbbell Press',
        'Upright Cable Row',
        'Crunches'
    ];

    $day2= [
        'Standing Calf Raise',
        'Lying Leg Curls',
        'Barbell Squat',
        'Leg Extensions'
    ];

    $day3= [
        'Dumbbell Bench Press',
        'Side Lateral Raise',
        'Upright Barbell Row',
        'Barbell Deadlift'
    ];

    $day4= [
        'Lying Leg Curls',
        'Barbell Squat',
        'Hyperextensions (Back Extensions)',
        'Crunches'
    ];

    $data = compact('name', 'activity', 'profileimage', 'hobbies', 'day1', 'day2', 'day3', 'day4');

    return view('program', $data);
});
