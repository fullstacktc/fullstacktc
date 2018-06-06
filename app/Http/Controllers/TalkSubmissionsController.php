<?php

namespace App\Http\Controllers;

use App\TalkSubmissions;
use Illuminate\Http\Request;

class TalkSubmissionsController extends Controller
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
        $this->validate(request(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'title' => 'required|string',
            'abstract' => 'required|string'
        ]);

        $result = TalkSubmissions::create([
            'name' => request('name'),
            'email' => request('email'),
            'title' => request('title'),
            'abstract' => request('abstract')
        ]);

        if(!$result) {
            Log::error('Something went wrong in saving the talk submission');
            abort(500, 'Something went wrong');
        }

        return view('talk_thankyou');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TalkSubmissions  $talkSubmissions
     * @return \Illuminate\Http\Response
     */
    public function show(TalkSubmissions $talkSubmissions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TalkSubmissions  $talkSubmissions
     * @return \Illuminate\Http\Response
     */
    public function edit(TalkSubmissions $talkSubmissions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TalkSubmissions  $talkSubmissions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TalkSubmissions $talkSubmissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TalkSubmissions  $talkSubmissions
     * @return \Illuminate\Http\Response
     */
    public function destroy(TalkSubmissions $talkSubmissions)
    {
        //
    }
}
