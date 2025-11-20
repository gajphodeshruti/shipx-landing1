<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $leads = Lead::latest()->get();
        return view('dashboard.index', compact('leads'));
    }

    public function edit($id)
    {
        $lead = Lead::findOrFail($id);
        return view('dashboard.edit', compact('lead'));
    }

    public function update(Request $request, $id)
    {
        $lead = Lead::findOrFail($id);
        $lead->update($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Lead updated!');
    }

    public function destroy($id)
    {
        Lead::findOrFail($id)->delete();
        return redirect()->route('dashboard.index')->with('success', 'Lead deleted!');
    }
}
