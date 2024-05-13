<?php

use App\Http\Controllers\GeneratePdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/download",[GeneratePdf::class,"generatePdf"])->name("download-pdf");


