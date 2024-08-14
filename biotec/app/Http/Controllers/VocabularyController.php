<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vocabulary;

class VocabularyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vocabularies.index', [
            'vocabularyCont'=>Vocabulary::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vocabularies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=$request->validate(['description'=>'required']);
        $validate=$request->validate(['vocabulary'=>'required']);

        $newVocabulary = new Vocabulary();
        $image = $request->file('image');
        $nameimg = time().'.'.$image -> getClientOriginalExtension();
        $destino = public_path('images/vocabulary');
        $request -> image -> move($destino,$nameimg);

        // $sound = $request->file('audio');
        // $nameaudio = time().'.'.$sound -> getClientOriginalExtension();
        // $destinoaudio = public_path('audios');
        // $request -> audio -> move($destinoaudio,$nameaudio);

        $newVocabulary -> img = $nameimg;
        $newVocabulary -> vocabulary = $request->get('vocabulary');
        $newVocabulary -> description = $request->get('description');
        $newVocabulary -> audio = $request->get('audio');
        $newVocabulary -> save();

        return redirect('/vocabularies');
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
