<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/',[WebController::class,'index'])->name('index');
Route::get('/about',[WebController::class,'about'])->name('about');
Route::get('/outdoor-led-screen-ads',[WebController::class,'outdoor_led_screen_ads'])->name('outdoor-led-screen-ads');
Route::get('/digital-marketing',[WebController::class,'digital_marketing'])->name('digital-marketing');
Route::get('/guerrilla-marketing',[WebController::class,'guerrilla_marketing'])->name('guerrilla-marketing');
Route::get('/cgi-service',[WebController::class,'cgi_service'])->name('cgi-service');
Route::get('/contact',[WebController::class,'contact'])->name('contact');
Route::post('mail',[WebController::class,'mail'])->name('mail');
Route::post('/subscribe',[WebController::class,'subscribe'])->name('subscribe');
