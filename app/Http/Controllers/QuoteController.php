<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\QuoteRequestMail;
use App\Models\Quote;

class QuoteController extends Controller
{
public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'nullable',
        'email' => 'required|email',
        'message' => 'required',
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

    $name = $request->name ? $request->name : 'Valued Client (Popup)';

    $data = [
        'name' => $name, 
        'email' => $request->email,
        'phone' => $request->phone ?? 'Not Provided',
        'message' => $request->message,
    ];

    try {
        Quote::create($data);

        Mail::to('amanullahshakoor284@gmail.com')->send(new QuoteRequestMail($data));
        
        return response()->json([
            'success' => true,
            'message' => 'Your Query has been sent successfully!'
        ]);

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Error: ' . $e->getMessage()
        ], 500);
    }
}
}