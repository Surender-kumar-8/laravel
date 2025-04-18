<?php

use App\Http\Controllers\Admin\Web\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard',[HomeController::class,'index']);
