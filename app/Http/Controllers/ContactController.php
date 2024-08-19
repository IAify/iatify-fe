<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);

        // Process form data
        $email = $request->input('email');
        $name = $request->input('name');
        $message = $request->input('message');

        // Perform actions such as storing the data or sending an email

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
