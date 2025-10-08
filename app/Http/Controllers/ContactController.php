<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $appName = config('app.name') ?? env('APP_NAME', 'Website');

        // send to you
        Mail::raw(
            "From: {$validated['name']} <{$validated['email']}>\n\n{$validated['message']}",
            function ($message) use ($validated) {
                $message->to('njorogebonface002@gmail.com')
                        ->subject($validated['subject'] ?? 'New message from portfolio')
                        ->replyTo($validated['email']);
            }
        );

        // auto-reply to sender
        Mail::raw(
            "Hello {$validated['name']},\n\nThanks for reaching out. I received your message and will contact you shortly.\n\nBest,\n{$appName}",
            function ($message) use ($validated, $appName) {
                $message->to($validated['email'])
                        ->subject("We received your message")
                        ->from('your_inbox@example.com', $appName);
            }
        );

        if ($request->ajax()) {
            return response()->json(['message' => 'Message sent successfully.']);
        }

        return back()->with('success', 'Message sent successfully.');
    }
}
