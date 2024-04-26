<?php

use App\Http\Controllers\EstudianteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('estudiantes', EstudianteController::class);
