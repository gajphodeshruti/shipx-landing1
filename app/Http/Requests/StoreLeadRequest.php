<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'          => 'required|string|max:255',
            'business_name' => 'nullable|string|max:255',
            'email'         => 'required|email',
            'phone'         => 'nullable|string|max:20',
            'message'       => 'required|string',
            'attachment'    => 'nullable|file|max:2048|mimes:jpg,jpeg,png,pdf',
        ];
    }
}
