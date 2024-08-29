<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendPdfController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-email-pdf', [SendPdfController::class, 'sendEmailPDF']);