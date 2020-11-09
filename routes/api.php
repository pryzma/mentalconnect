<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileMessageController;
use App\Http\Controllers\ProfilePreferenceController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ChatCategoryController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResources([
    'profiles' => ProfileController::class,
    'preferences' => ProfilePreferenceController::class,
    'role' => RoleController::class,
    'chat' => ChatController::class,
    'message' => ProfileMessage::class,
    'connection' => ConnectionController::class,
]);
