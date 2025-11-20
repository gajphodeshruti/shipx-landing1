<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreLeadRequest;
use App\Models\Lead;

use Illuminate\Http\RedirectResponse;



class LeadController extends Controller
{
    //
    public function index()
{
    return view('welcome');
}
public function store(StoreLeadRequest $request): RedirectResponse
    {
        // $request->validated() contains the validated data
        try {
            Lead::create($request->validated());
            
            // Redirect back to the landing page with a success message
            return back()->with('success', 'Thank you! Your inquiry has been submitted successfully.');

        } catch (\Exception $e) {
            // Redirect back with an error message
            return back()->with('error', 'A database error occurred. Please try again.');
        }
    }
}
