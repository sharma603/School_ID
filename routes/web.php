<?php

use Illuminate\Support\Facades\Route;

 Route::get('/home', function () {
     return view('layouts/schooldetails');
 });
Route::get('/student-import', function(){
    return view('layouts/StudentDetailsImport');
});


Route::get('/school-save', 'SchoolController@school_save');
