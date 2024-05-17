<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\DocumentRequest;
use App\Models\Applicant;

class DocumentController extends Controller
{
    public function store(DocumentRequest $request)
    {
        // Validated data will be available in the $validatedData variable
        $validatedData = $request->validated();
        
        // Insert data into the database
        Applicant::create($validatedData);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Document created successfully.');
    }
}
