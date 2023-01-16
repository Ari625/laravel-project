<?php

namespace App\Http\Controllers;

use App\Models\kuis;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorekuisRequest;
use App\Http\Requests\UpdatekuisRequest;
use Illuminate\Http\Request;

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
        $no_kuis = 0 ;
        $data_kuis = kuis::all();
        return view('kuis', [
            'title' => 'KUIS'
        ])->with('data_kuis',$data_kuis)->with('no_kuis',$no_kuis);
    }
    public function answers(Request $request)
    {
        global $data_kuis;
        $validateData = $request->validate([
            'no_kuis' => 'required',
            'answer_user' => 'required'
        ]);
        $answer_user = $validateData['answer_user'];
        $no_kuis = $validateData['no_kuis'];

        $poin_user = 0;

        $answer = $data_kuis([$no_kuis]['answer']);

        if ($answer_user === $answer){
            $poin_user += 10;
        } else {
            $poin_user += 0;
        }

        return $poin_user;
    }

    public function finish()
    {
        global $poin_user;
        $poin_user = 10*10;
        return view('finish-kuis',[
            'title' => 'FINISH'
        ])->with('poin_user',$poin_user);
    }
}
// redirect()->route('RouteName',[
//     'name' => 'kuis',
//     'number' => $no_kuis
// ])
