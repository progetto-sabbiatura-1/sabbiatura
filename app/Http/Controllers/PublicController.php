<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home(){
        return view('home');
    }

    public function submit(Request $request){

        $adminMail="jacopobellina03@gmail.com";
        $name = $request->name;
        $email = $request->email;
        $body = $request->body;

        $user = compact('name' , 'email' , 'body');
        Mail::to($email)->send(new ContactMail($user));
        Mail::to($adminMail)->send(new AdminMail($user));
        return redirect(route('home'))->with('message', 'La tua E-Mail è stata inviata con successo!');
    }
}
