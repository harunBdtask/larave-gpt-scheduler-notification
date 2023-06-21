<?php

use App\Http\Controllers\NotificationController;
use App\Http\Livewire\ChatGpt;
use App\Jobs\ProcessPodcast;
use App\Models\User;
use HarunurRashid\LaravelUniqueSlug\Facades\UniqueSlug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use OpenAI\Laravel\Facades\OpenAI;

Route::get('/', function(){
    $slug =  UniqueSlug::generate(User::class, 'lala', 'lala@gmail.com');
    dd($slug);
    ProcessPodcast::dispatch();
    return view('index');
});
Route::get('/chat', ChatGpt::class);
Route::get('/notification', [NotificationController::class, 'sendNotification']);

