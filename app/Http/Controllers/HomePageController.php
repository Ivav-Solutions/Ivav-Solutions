<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;


class HomePageController extends Controller
{
    public function index() {
        return view('welcome');
    }
    
    public function about_us() {
        return view('about');
    }
    
    public function contactConfirm(Request $request) {
        //Validate Request
        $this->validate($request, [
            'phone' => 'required|numeric',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        /** Store information to include in mail in $data as an array */
        $data = array(
            'name' => request()->name,
            'email' => request()->email,
            'phone' => request()->phone,
            'subject' => request()->subject,
            'description' => request()->message,
            'created_at' => now(),
            'admin' => 'contact@ivavsolutions.com',
        );
        /** Send message to the admin */
        Mail::send('emails.contact', $data, function ($m) use ($data) {
            $m->to($data['admin'])->subject('Contact Form Notification');
        });

        return back()->with('success_report', 'Thanks for contacting us, We will get in touch with you shortly!');
    }
}
