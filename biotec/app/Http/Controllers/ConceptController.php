<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Concept;

class ConceptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('concepts.index', [
            'conceptCont'=>Concept::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('concepts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=$request->validate(['concept'=>'required']);
        $validate=$request->validate(['description'=>'required']);

        $newConcept = new Concept();
        $image = $request->file('image');
        $nameimg = time().'.'.$image -> getClientOriginalExtension();
        $destino = public_path('images/concepts');
        $request -> image -> move($destino,$nameimg);

        // $sound = $request->file('audio');
        // $nameaudio = time().'.'.$sound -> getClientOriginalExtension();
        // $destinoaudio = public_path('audios');
        // $request -> audio -> move($destinoaudio,$nameaudio);

        $newConcept -> img = $nameimg;
        $newConcept -> concept = $request->get('concept');
        $newConcept -> description = $request->get('description');
        $newConcept -> audio = $request->get('audio');
        $newConcept -> save();

        return redirect('/concepts');
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
