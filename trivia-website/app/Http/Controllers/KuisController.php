<?php

namespace App\Http\Controllers;

use App\Models\kuis;
use App\Http\Requests\StorekuisRequest;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\UpdatekuisRequest;

class KuisController extends Controller
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
     * @param  \App\Http\Requests\StorekuisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekuisRequest $request)
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
     * @param  \App\Http\Requests\UpdatekuisRequest  $request
     * @param  \App\Models\kuis  $kuis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekuisRequest $request, kuis $kuis)
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

    public function kuis(){
        return view('kuis', [
            'title' => 'KUIS'
        ]);
    }
}
