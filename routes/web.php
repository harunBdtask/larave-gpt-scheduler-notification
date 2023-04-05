<?php

use App\Http\Controllers\NotificationController;
use App\Http\Livewire\ChatGpt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use OpenAI\Laravel\Facades\OpenAI;

Route::get('/', ChatGpt::class);
Route::get('/notification', [NotificationController::class, 'sendNotification']);

