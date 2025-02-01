<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        // Store the message in the database
        $contactMessage = new ContactMessage();
        $contactMessage->full_name = $request->input('fullName');
        $contactMessage->email = $request->input('email');
        $contactMessage->phone = $request->input('phone');
        $contactMessage->message = $request->input('message');
        $contactMessage->save();

        // Return success response
        return response()->json(['success' => true, 'message' => 'Your message has been sent successfully.']);
    }
}
