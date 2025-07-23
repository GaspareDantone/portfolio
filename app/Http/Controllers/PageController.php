<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function homepage() 
    {
         return view('homepage');
    }

    public function project() {
    return view('project'); 
    }

    public function aboutme() {
    return view('aboutme');
    }

   public function contact() {
    return view('contact');
    }

    public function send(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->input('email'),
            'message' => $request->message,


        ];
        Mail::to('dantogas@gmail.com')->send(new ContactMail($data));
        return redirect()->route('emails.thankyou');
    }
     
    public function thankyou()
    {
        return view('emails.thankyou');
    }

    public function downloadcv(){

        $path = storage_path('app/public/cv-07-2025.pdf');

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->download($path, 'cv-07-2025.pdf');



    }
    
}
