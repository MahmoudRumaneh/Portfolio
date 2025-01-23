<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submitContactForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $emailContent = "
You have a message from: {$validated['email']}.

With this content:

{$validated['message']}

Best regards,

{$validated['name']}.
        ";
    
        try {
            Mail::raw($emailContent, function ($message) use ($validated) {
                $message->to('mahmoudrmn@gmail.com')
                        ->subject($validated['subject'])
                        ->from($validated['email'], $validated['name']);
            });
            return response('OK', 200);
        } catch (\Exception $e) {
            return response('Failed to send the email: ' . $e->getMessage(), 500);
        }
    }    
}
