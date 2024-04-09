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
    public function contatti(){
        return view('contatti');
    }
    public function galleria(){
        return view('galleria');
    }


    // public function submit(Request $request){

    //     $adminMail="jacopobellina03@gmail.com";
    //     $name = $request->name;
    //     $email = $request->email;
    //     $body = $request->body;

    //     $validatedData = $request->validate([
    //         'name' => 'required' ,
    //         'email' => 'required',
    //         'body' => 'required',
    // ]);

    //     $user = compact('name' , 'email' , 'body');
    //     Mail::to($email)->send(new ContactMail($user));
    //     Mail::to($adminMail)->send(new AdminMail($user));

    //     return redirect(route('home'))->with('success', 'La tua E-Mail è stata inviata con successo!');
    // }
    
    public function submit(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'body' => 'required',
        ]);
    
        // Dati validati e nessun errore di validazione
        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'body' => $request->body,
        ];
    
        try {
            // Invio delle e-mail
            Mail::to($request->email)->send(new ContactMail($user));
            Mail::to("jacopobellina03@gmail.com")->send(new AdminMail($user));
    
            return redirect(route('home'))->with('success', 'La tua e-Mail è stata inviata con successo!');
        } catch (\Exception $e) {
            // Mantieni questo come fallback in caso di eccezione non legata alla validazione
            return redirect()->back()->withInput()->withErrors(['email' => 'Non è stato possibile inviare l email. Riprova più tardi.']);
        }
    }
}