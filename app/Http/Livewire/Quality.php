<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\QualityMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class Quality extends Component
{
    public function render()
    {
        return view('livewire.quality');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //dd($request);
        $correo = new QualityMailable($request->all());
        //dd($correo);
        Mail::to('sandyrod@gmail.com')->send($correo);
        // return "mensaje enviado";
        return view('quality'); 
    }
}
