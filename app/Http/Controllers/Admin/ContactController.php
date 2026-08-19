<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function storeContactFormData(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
        $result = Contact::create($validatedData);
        
        if (!$result) {
            return response()->json([
                'message' => 'Failed to submit contact form.',
            ], 500);
        }

        return response()->json([
            'message' => 'Contact form submitted successfully!',
            'data' => $result,
        ], 200);
    }
}
