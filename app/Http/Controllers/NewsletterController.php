<?php

namespace App\Http\Controllers;

/* use App\Models\newsletter; */
use Illuminate\Http\Request;

use Spatie\Newsletter\NewsletterFacade as Newsletter;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Newsletter::subscribe($request->email);
        return redirect()->to('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(newsletter $newsletter)
    {
        //
    }
}
