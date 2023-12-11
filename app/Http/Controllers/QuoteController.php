<?php

namespace App\Http\Controllers;

// use Validator;
use App\Models\Qoute;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function qoute(Request $req){
     
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:qoute',
            'phone'=>'required|min:11|numeric',
            'massage' => 'required'
            
        ]);
     
        $qoute= new Qoute;
        
        $qoute->name=$req->name;
        $qoute->email=$req->email;
        $qoute->phone=$req->phone;
        $qoute->message=$req->message;
        $qoute->save();
       return redirect()->back();
      
    }
}
