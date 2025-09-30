<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HireMeController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'quote' => 'required|numeric|min:0',
            'position_type' => 'required|in:Full Time,Part Time',
            'message' => 'nullable|string|max:2000',
        ]);

        $client_name = $request->input('client_name');
        $client_email = $request->input('client_email');
        $company = $request->input('company');
        $location = $request->input('location');
        $quote = $request->input('quote');
        $position_type = $request->input('position_type');
        $message = $request->input('message');

        // Optionally, group all data in an array
        $formData = [
            'client_name' => $client_name,
            'client_email' => $client_email,
            'company' => $company,
            'location' => $location,
            'quote' => $quote,
            'position_type' => $position_type,
            'message' => $message,
        ];

        // Insert form data into the database
        \DB::table('hire_me_requests')->insert([
            'client_name'    => $request->input('client_name'),
            'client_email'   => $request->input('client_email'),
            'company'        => $request->input('company'),
            'location'       => $request->input('location'),
            'quote'          => $request->input('quote'),
            'position_type'  => $request->input('position_type'),
            'message'        => $request->input('message'),
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);


        return redirect()
            ->back()
            ->with('success', 'Your offer has been submitted successfully!');
    }
}
