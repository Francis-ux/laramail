<?php

namespace App\Http\Controllers;

use App\Mail\Message;
use App\Models\Mail as MailModel;
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
            'receiver_email'    => 'required|email',
            'subject'           => 'required',
            'message'           => 'required'
        ]);

        $data = [
            'receiver_email' => $request->receiver_email,
            'subject'   => $request->subject,
            'message'   => $request->message,
        ];

        MailModel::create($data);

        $emailData = [
            'message'   => $request->message,
            'email'     => $request->receiver_email
        ];

        try {
            Mail::to($request->receiver_email)->send(new Message($emailData, $request->subject));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        return back()->with('success', 'Email sent successfully');
    }
}
