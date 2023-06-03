<?php

use App\Http\Controllers\NotificationController;
use App\Http\Livewire\ChatGpt;
use App\Jobs\ProcessPodcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use OpenAI\Laravel\Facades\OpenAI;

Route::get('/', function(){
    ProcessPodcast::dispatch();
    return view('index');
});
Route::get('/chat', ChatGpt::class);
Route::get('/notification', [NotificationController::class, 'sendNotification']);

