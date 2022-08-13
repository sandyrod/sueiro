<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class Contact extends Component
{
    public  $name, $apellido, $correo, $empresa; 
    
    public function render()
    {
        return view('livewire.contact');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // dd($request);
        $correo = new ContactMailable($request->all());
        //dd($correo);
        Mail::to('sandyrod@gmail.com')->send($correo);
        // return "mensaje enviado";
        return view('contact'); 
    }
}
