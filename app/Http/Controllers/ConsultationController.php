<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ConsultationFormMail;
use Illuminate\Support\Facades\Mail;

class ConsultationController extends Controller
{
    public function sendConsultationForm(Request $request)
    {
        // Validate the form inputs, including Google reCAPTCHA
        $request->validate([
            'g-recaptcha-response' => 'required|captcha',
            'name22' => 'required|string|min:2',
            'phone_number22' => 'required|digits_between:10,15',
            'location22' => 'required|string|min:4',
        ]);

        // Collect the form data
        $data = $request->all();

        // Send an email with the consultation data
        Mail::to('syedasgarahmed11@gmail.com')->send(new ConsultationFormMail($data));
        //Mail::to('admin@preventivecarelab.com')->send(new ConsultationFormMail($data));

        // Redirect with a success message
        return redirect()->back()->with('success', 'Thank you, we will reach you shortly. (8am-8pm)');
    }
}
