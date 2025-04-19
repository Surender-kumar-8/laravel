<?php

use App\Http\Controllers\Admin\Web\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function() {
    return view('frontend.pages.home');
});
