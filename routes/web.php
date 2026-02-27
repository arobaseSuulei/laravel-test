<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/add_properties',function (){
    return view('admin.properties');
});
