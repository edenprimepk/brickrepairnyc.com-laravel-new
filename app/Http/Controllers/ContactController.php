<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function index(){
   
        return view('contact-us');
    }

    public function contact(Request $request)
    {
  
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'zip' => 'required|string|max:10',
            'service' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
            'agree' => 'accepted',
        ]);

        

        $redirectUrl = $request->input('redirect_url', route('frontend.contact-us'));
        if ($validator->fails()) {
            return redirect($redirectUrl)
                ->withErrors($validator)
                ->withInput();
        }

        Mail::to('f@edengc.com')->send(new Contact($request->all()));
        $request->session()->flash('success', 'Thank you for contacting us.');
        return redirect($redirectUrl);
    }


}
