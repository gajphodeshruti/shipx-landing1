<?php
// routes/api.php

use App\Http\Controllers\Api\LeadApiController;
use Illuminate\Support\Facades\Route;

// This single line defines all the required CRUD API endpoints (Bonus Point)
Route::apiResource('leads', LeadApiController::class);

// Endpoints mapped:
// GET    /api/leads
// POST   /api/leads
// PUT    /api/leads/{lead}
// DELETE /api/leads/{lead}

