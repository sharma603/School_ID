<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/schooldetails');
});


Route::get('/school-save', 'SchoolController@school_save');
