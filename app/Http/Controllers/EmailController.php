<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $validInput = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:60'],
            'email_address' => ['required', 'email:rfc,dns', 'max:125'],
            'message' => ['required', 'string']
        ]);

        if($validInput->fails())
        {
            return response()->json($validInput->errors(), 400);
        }

        Mail::to(env('APP_EMAIL_RECIPIENT'))->send(new ContactSent(Contact::createFromRequest($request->all())));

        return response()->json(['success' => 'Thank you. Your message was sent.'], 200);
    }
}
