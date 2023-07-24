<?php

namespace App\Http\Controllers;

use App\Models\FormSubmission;
use Illuminate\Http\Request;

class FormSubmissionController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:form_submissions,email',
            'phone' => 'required|string|max:20',
            'dob' => 'required|date',
        ]);

        $formSubmission = FormSubmission::create($validatedData);

        return response()->json(['message' => 'Form submission successful!', 'data' => $formSubmission], 201);
    }
}

