<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacebookMessagesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/facebook/conversations', 
    [FacebookMessagesController::class, 'getConversations']);
    
// Route::get('/messages', function() {
//     return view('messages');
// });

Route::get('/messages', [FacebookMessagesController::class, 'getConversations'])->name('messages');
