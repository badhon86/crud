<?php

namespace App\Http\Controllers;
use session;
use App\Models\msg;
use Illuminate\Http\Request;

class MsgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $msgs =msg::all();
        // return view('msg.index')->with('msgs', $msgs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('msg.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());
       $this->validate($request, [
        'name' => 'required',
        'email' =>'required',
        'subject' =>'required',
        'body' => 'required',
    ]);
    msg::create([
        'name' => $request->name,
        'email'=> $request->email,
        'subject' => $request->subject,
        'body'=> $request->body,
    ]);
    $request->session()->flash('success', 'message sent successfully');
    return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function show(msg $msg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function edit(msg $msg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, msg $msg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function destroy(msg $msg)
    {
        //
    }
}
