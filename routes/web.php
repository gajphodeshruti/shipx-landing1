<?php
use App\Http\Controllers\LeadController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// --- 1. Public Facing Routes ---

// GET / : Landing Page / Home (e.g., could show a form or a public list)
Route::get('/', [LeadController::class, 'index'])->name('welcome');

// New: GET /leads - To view a list of all leads (index page for leads)
// This is the route you were missing, which caused the 405 error when accessing the URL directly.
Route::get('/leads', [LeadController::class, 'index'])->name('leads.index');

// POST /leads - To submit/store a new lead via a form (store action)
Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');

// POST /submit-lead - An alternative route name for submitting a lead (if needed)
Route::post('/submit-lead', [LeadController::class, 'store'])->name('lead.store');

// Route::resource for Dashboard (assuming protected routes for viewing/managing)
Route::resource('dashboard', DashboardController::class);

// Store Lead Form
Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');