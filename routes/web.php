<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as faker;

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', function () {
    session()->flash('message', 'Akun telah berhasil dibuat. Silakan login.');
    
    return redirect()->route('login');
})->name('register.submit');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    session()->flash('message', 'Anda telah berhasil login.');

    return redirect()->route('contact');
})->name('login.submit');

Route::get('/contact', function () {
    $contact = [];
    $faker = Faker::create();
    for($i = 1; $i <= 10; $i++){
        $contact[]=[
            'name' => $faker-> name,
            'email' => $faker-> unique()->safeEmail,
            'company' => $faker-> company,
            'phone' => $faker-> phonenumber
        ];
    }

    return view('contact',compact('contact'));
})->name('contact');

Route::post('/login', function () {
    session()->flash('message', 'Anda telah berhasil login.');

    return redirect()->route('contact');
})->name('login.submit');

