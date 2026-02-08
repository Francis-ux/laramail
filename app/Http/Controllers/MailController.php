<?php

namespace App\Http\Controllers;

use App\Mail\Interserver;
use Illuminate\Http\Request;
use App\Models\Mail as MailModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApiSubscriptionSuccessful;
use App\Mail\FakeData;
use App\Mail\Plain;

class MailController extends Controller
{
    public function mail()
    {
        return view('mail');
    }
    public function sendInterserverMail(Request $request)
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
            'email'     => $request->receiver_email,
            'subject'   => $request->subject
        ];

        try {
            Mail::to($request->receiver_email)->send(new Interserver($emailData, $request->subject . ' - ' . now()));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        return back()->with('success', 'Email sent successfully');
    }

    public function sendApiSubscriptionMail(Request $request)
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
    public function sendFakeDataMail(Request $request)
    {
        $request->validate([
            'receiver_email'    => 'required|email',
            'subject'           => 'required|string',
            'message'           => 'nullable|string'
        ]);

        $emailData = [
            'message'   => $request->message,
            'email'     => $request->receiver_email,
            'subject'   => $request->subject
        ];

        try {
            Mail::to($request->receiver_email)->send(new FakeData($request->subject, $emailData));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        return back()->with('success', 'Email sent successfully');
    }

    public function sendPlainMail(Request $request)
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
            'email'     => $request->receiver_email,
            'subject'   => $request->subject
        ];

        try {
            Mail::to($request->receiver_email)->send(new Plain($request->subject, $emailData));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        return back()->with('success', 'Email sent successfully');
    }
}
