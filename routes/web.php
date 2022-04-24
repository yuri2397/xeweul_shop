<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;


Route::get("/",[ShopController::class, 'index']);

Route::get("/details", [ShopController::class, 'details']);