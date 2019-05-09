<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendContactFormMessage;
use App\Http\Requests\ProcessContactForm;

class ContactController extends Controller
{
    /**
     * Handle the contact form submission.
     *
     * @param  \App\Http\Requests\ProcessContactForm  $request
     * @return \Illuminate\Http\Response
     */
    public function processContactForm(ProcessContactForm $request)
    {
        $formData = $request->only(['name', 'email', 'message',]);
        $mail = Mail::send(new SendContactFormMessage($formData));

    	return response()->json([
    		'mail_status' => $mail,
    		'success' => true,
    	]);
    }
}
