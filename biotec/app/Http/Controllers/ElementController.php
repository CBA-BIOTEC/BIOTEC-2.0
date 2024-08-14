<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Element;

class ElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('elements.index', [
            'elementCont'=>Element::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('elements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=$request->validate(['element'=>'required']);
        $validate=$request->validate(['description'=>'required']);

        $newElement = new Element();
        $image = $request->file('image');
        $nameimg = time().'.'.$image -> getClientOriginalExtension();
        $destino = public_path('images/elements');
        $request -> image -> move($destino,$nameimg);

        // $sound = $request->file('audio');
        // $nameaudio = time().'.'.$sound -> getClientOriginalExtension();
        // $destinoaudio = public_path('audios');
        // $request -> audio -> move($destinoaudio,$nameaudio);

        $newElement -> img = $nameimg;
        $newElement -> element = $request->get('element');
        $newElement -> description = $request->get('description');
        $newElement -> audio = $request->get('audio');
        $newElement -> save();

        return redirect('/elements');
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
