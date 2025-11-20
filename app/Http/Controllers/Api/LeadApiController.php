<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLeadRequest;
use App\Models\Lead;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LeadApiController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Lead::all());
    }

    public function store(StoreLeadRequest $request): JsonResponse
    {
        $data = $request->validated();

        // File upload for API
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/leads'), $filename);

            $data['attachment'] = $filename;
        }

        $lead = Lead::create($data);
        return response()->json($lead, 201);
    }

    public function update(Request $request, Lead $lead): JsonResponse
    {
        $lead->update($request->all());
        return response()->json($lead, 200);
    }

    public function destroy(Lead $lead): JsonResponse
    {
        $lead->delete();
        return response()->json(null, 204);
    }
}
