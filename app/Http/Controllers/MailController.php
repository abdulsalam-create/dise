<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\Mailer;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mail(Request $request) {
        $resource = new Mailer;
        $resource->name = $request->name;
        $resource->email = $request->email;
        $resource->save();
        session()->flash('success', 'Action Completed successfully.');

        return redirect()->route('home');
    }


    public function submitForm(Request $request)
    {
     
        Mail::to('disebuseri@gmail.com')->send(new ContactMail($request));

        session()->flash('success', 'Email Sent successfully.');

        return redirect()->route('home');
    }
}
