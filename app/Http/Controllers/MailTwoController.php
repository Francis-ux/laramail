<?php

namespace App\Http\Controllers;

use App\Mail\PulumiMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailTwoController extends Controller
{
    public function mail()
    {
        return view('mail2');
    }

    public function sendPulumiMail(Request $request)
    {
        $request->validate([
            'receiver_email' => 'required|email',
        ]);

        $data = [
            'receiver_email' => $request->receiver_email,
        ];

        config(['mail.from.address' => 'support@pulumi.com', 'mail.from.name' => 'Pulumi Corporation']);

        try {
            Mail::to($request->receiver_email)->send(new PulumiMail($data['receiver_email']));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        return back()->with('success', 'Email sent successfully');
    }
}
