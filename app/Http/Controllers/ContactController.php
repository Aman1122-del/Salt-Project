<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()->all()
            ], 422);
        }

        // Verify Google reCAPTCHA
        $recaptchaResponse = $request->input('g-recaptcha-response');
        if (!$recaptchaResponse) {
            return response()->json([
                'success' => false,
                'message' => 'Please complete the reCAPTCHA verification.'
            ], 422);
        }

        $response = \Illuminate\Support\Facades\Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $recaptchaResponse,
            'remoteip' => $request->ip(),
        ]);

        if (!$response->json('success')) {
            return response()->json([
                'success' => false,
                'message' => 'ReCAPTCHA verification failed. Please try again.'
            ], 422);
        }

        $data = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'subject' => $request->subject ?? 'No Subject',
            'message' => $request->message,
        ];

        try {
            // Ideally store in DB too, but sticking to Mail for now as per QuoteController pattern
            // If DB is needed, I'd create a Model, but sticking to Mail first.
            
            Mail::to('amanullahshakoor284@gmail.com')->send(new ContactFormMail($data));

            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully!'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }
}
