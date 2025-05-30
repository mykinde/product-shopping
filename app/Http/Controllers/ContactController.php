<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|max:1000',
        ]);

        // Send email
        Mail::raw("Message from {$validated['name']} <{$validated['email']}>\n\nSubject: {$validated['subject']}\n\n{$validated['message']}", function ($message) use ($validated) {
            $message->to('admin@example.com')
                    ->subject('Contact Form: ' . $validated['subject']);
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
