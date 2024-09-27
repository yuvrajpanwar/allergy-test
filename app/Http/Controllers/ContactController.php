<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactForm(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'required|captcha',
            'name' => 'required|string|min:2',
            'phone_number' => 'required|digits_between:10,15',
            'email' => 'required|email',
            'location' => 'required|string|min:4',
            // 'message' => 'required|string|min:10',
        ]);

        $data = $request->all();

        //Mail::to('yogipanwar173@gmail.com')->send(new ContactFormMail($data));
        Mail::to('admin@preventivecarelab.com')->send(new ContactFormMail($data));



        return redirect('/success')->with('success', 'Message sent successfully!')->with('data', $data);
    }
}
