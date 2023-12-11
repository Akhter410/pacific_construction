<?php

namespace App\Http\Controllers;

use App\Mail\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('front.contact');
    }

    public function SendMessage(Request $request){
        
        $data=$request->input();
        $contact=$data['email'];
        $message=$data['message'];        
        
        if($contact){
            Mail::to('akhtarnawazkhan5@gmail.com')->send(new SendMail($data));
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
   
   public function refreshCaptcha(){
       return response()->json(['captcha'=> captcha_img()]);
   }

}

