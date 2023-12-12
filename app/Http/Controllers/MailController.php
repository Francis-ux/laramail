<?php

namespace App\Http\Controllers;

use App\Mail\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mail()
    {
        return view('mail');
    }
    public function sendMail(Request $request)
    {
        $request->validate([
            'receiver_email'    => 'required|email|unique:users,email',
            'subject'           => 'required',
            'message'           => 'required'
        ]);

        $data = [
            'message'   => $request->message,
            'email'     => $request->receiver_email
        ];

        try {
            Mail::to($request->receiver_email)->send(new Message($data, $request->subject));

            return back()->with('success', 'Email sent successfully');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
