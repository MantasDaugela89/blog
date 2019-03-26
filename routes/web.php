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

Route::get('contact', function () {

    $name = 'vardas';
    $email = 'email';
    $phone = 'numeris';

    $interests= [
        'kava',
        'kaitai',
        'krepsinis',
        'kruopos'
    ];

    $data = compact('name', 'email', 'phone', 'interests');

    return view('contact', $data);
});
