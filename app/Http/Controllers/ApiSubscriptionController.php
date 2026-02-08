<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApiSubscriptionSuccessful;

class ApiSubscriptionController extends Controller
{
    public function mail()
    {
        return view('mail');
    }
    public function sendMail(Request $request)
    {
        $request->validate([
            'receiver_email'    => 'required|email',
            'subject'           => 'required|string',
            'message'           => 'nullable|string'
        ]);

        try {
            Mail::to($request->receiver_email)->send(new ApiSubscriptionSuccessful($request->subject));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        return back()->with('success', 'Email sent successfully');
    }
}
