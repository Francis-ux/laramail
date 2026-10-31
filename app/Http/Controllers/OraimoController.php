<?php

namespace App\Http\Controllers;

use App\Mail\OraimoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OraimoController extends Controller
{
    public function oraimo()
    {
        return view('oraimo');
    }

    public function sendOraimoMail(Request $request)
    {
        $request->validate([
            'receiver_email' => 'required|email',
        ]);

        $data = [
            'receiver_email' => $request->receiver_email,
        ];

        config(['mail.from.address' => 'care.ng@oraimo.com', 'mail.from.name' => 'Oraimo']);

        try {
            Mail::to($request->receiver_email)->send(new OraimoMail($data['receiver_email']));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        return back()->with('success', 'Email sent successfully');
    }
}
