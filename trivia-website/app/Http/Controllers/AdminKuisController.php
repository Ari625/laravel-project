<?php

namespace App\Http\Controllers;

use App\Models\kuis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminKuisController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kuis  $kuis
     * @return \Illuminate\Http\Response
     */
    public function show(kuis $kuis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kuis  $kuis
     * @return \Illuminate\Http\Response
     */
    public function edit(kuis $kuis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kuis  $kuis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kuis $kuis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kuis  $kuis
     * @return \Illuminate\Http\Response
     */
    public function destroy(kuis $kuis)
    {
        //
    }

    public function addkuis(){
        return view('admin.addkuis',[
            'title' => 'ADDKUIS'
        ]);
    }

    public function inputkuis(Request $request)
    {
        $input = $request->validate([
            'questions' => 'required|max:255',
            'answer'    => 'required|max:255',
            'option_a'  => 'required|max:255',
            'option_b'  => 'required|max:255',
            'option_c'  => 'required|max:255',
            'option_d'  => 'required|max:255'
        ]);
        kuis::create($input);

        return redirect('/addkuis')->with('input_succses', 'Input Kuis Succsesfull!');
    }
}
