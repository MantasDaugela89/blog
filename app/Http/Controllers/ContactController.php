<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
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
    }
}
