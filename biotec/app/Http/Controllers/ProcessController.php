<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Process;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('processes.index', [
            'processCont'=>Process::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('processes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=$request->validate(['process'=>'required']);
        $validate=$request->validate(['description'=>'required']);

        $newElement = new Process();
        $image = $request->file('image');
        $nameimg = time().'.'.$image -> getClientOriginalExtension();
        $destino = public_path('images/process');
        $request -> image -> move($destino,$nameimg);

        // $sound = $request->file('audio');
        // $nameaudio = time().'.'.$sound -> getClientOriginalExtension();
        // $destinoaudio = public_path('audios');
        // $request -> audio -> move($destinoaudio,$nameaudio);

        $newElement -> img = $nameimg;
        $newElement -> process = $request->get('process');
        $newElement -> description = $request->get('description');
        $newElement -> audio = $request->get('audio');
        $newElement -> save();

        return redirect('/processes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
