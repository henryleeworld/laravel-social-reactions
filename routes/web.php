<?php

use App\Http\Controllers\SocialReactionController;
use Illuminate\Support\Facades\Route;

Route::get('/social-reaction', [SocialReactionController::class, 'index']);
