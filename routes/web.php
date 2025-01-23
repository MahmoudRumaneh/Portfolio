<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'index'])->name('home.index');

Route::post('/forms/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.details');