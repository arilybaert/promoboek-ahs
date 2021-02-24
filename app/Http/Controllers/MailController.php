<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendAccountActivation(Request $r)
    {
        $details = [
            'title' => $r->name,
            'body' => 'Your account is now activated!'
        ];
        Mail::to($r->email)->send(new \App\Mail\NotificationMail($details));
        return redirect()->route('admin');
    }

    // public function sendNewAccountRequest(Request $r)
    // {
    //     $details = [
    //         'title' => 'Administrator',
    //         'body' => 'There is a new account submission by ' . $r->first_name . ' ' . $r->last_name
    //     ];
    //     Mail::to('ari_lybaert@outlook.com')->send(new \App\Mail\NotificationMail($details));
    // }
}
