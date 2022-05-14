<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Contact;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class ContactController extends Controller
{
    public function send(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required|numeric',
            'message' => 'required',
        ]);

        if($validator->passes()){
            $contact = new Contact();
            $contact->nom = $request['name'];
            $contact->email = $request['email'];
            $contact->sujet = $request['subject'];
            $contact->numero = $request['phone'];
            $contact->message = $request['message'];
            $contact->save();
            redirect('accueil');
        }

        return redirect('contact')
                        ->withErrors($validator)
                        ->withInput();
        
    }

    public function index(){
        return view('contact');
    }
}
