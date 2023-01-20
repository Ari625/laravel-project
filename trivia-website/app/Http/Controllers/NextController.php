<?php

namespace App\Http\Controllers;

use App\Http\Controllers\KuisController;
use App\Models\kuis;
use Illuminate\Http\Request;

class NextController extends Controller
{
    public function answers(Request $request)
    {
        $data_kuis = kuis::all();
        $validateData = $request->validate([
            'poin_user' => 'required'
        ]);
        $poin_user = $validateData['poin_user'];
    }

    public function correct(){

        global $no_kuis;
        global $data_kuis;
        global $poin_user;
        return view ('correction',[
            'title' => 'KUIS',
            'no_kuis' => $no_kuis,
            'data_kuis' => $data_kuis,
       ])->with('data_kuis', $data_kuis);
    }
    public function wrong(){
        global $no_kuis;
        global $data_kuis;
        global $poin_user;
        return view ('correction',[
            'title' => 'KUIS',
            'no_kuis' => $no_kuis,
            'data_kuis' => $data_kuis,
        ])->with('data_kuis', $data_kuis);
    }

    public function next1()
    {
        global $no_kuis;
        global $poin_user;
        $data_kuis = kuis::all();
        $no_kuis += 1;
        return view('kuis', [
            'title' => 'KUIS',
            'no_kuis' => $no_kuis,
            'poin_user' => $poin_user
        ])->with('data_kuis',$data_kuis);
    }
   
    public function next2()
    {
        global $no_kuis;
        global $poin_user;
        $data_kuis = kuis::all();
        $no_kuis += 2;
        return view('kuis', [
            'title' => 'KUIS',
            'no_kuis' => $no_kuis,
            'poin_user' => $poin_user
        ])->with('data_kuis',$data_kuis);
    }
    public function next3()
    {
        global $no_kuis;
        global $poin_user;
        $data_kuis = kuis::all();
        $no_kuis += 3;
        return view('kuis', [
            'title' => 'KUIS',
            'no_kuis' => $no_kuis,
            'poin_user' => $poin_user
        ])->with('data_kuis',$data_kuis);
    }
    public function next4()
    {
        global $no_kuis;
        global $poin_user;
        $data_kuis = kuis::all();
        $no_kuis += 4;
        return view('kuis', [
            'title' => 'KUIS',
            'no_kuis' => $no_kuis,
            'poin_user' => $poin_user
        ])->with('data_kuis',$data_kuis);
    }
    public function next5()
    {
        global $no_kuis;
        global $poin_user;
        $data_kuis = kuis::all();
        $no_kuis += 5;
        return view('kuis', [
            'title' => 'KUIS',
            'no_kuis' => $no_kuis,
            'poin_user' => $poin_user
        ])->with('data_kuis',$data_kuis);
    }
    public function next6()
    {
        global $no_kuis;
        global $poin_user;
        $data_kuis = kuis::all();
        $no_kuis += 6;
        return view('kuis', [
            'title' => 'KUIS',
            'no_kuis' => $no_kuis,
            'poin_user' => $poin_user
        ])->with('data_kuis',$data_kuis);
    }
    public function next7()
    {
        global $no_kuis;
        global $poin_user;
        $data_kuis = kuis::all();
        $no_kuis += 7;
        return view('kuis', [
            'title' => 'KUIS',
            'no_kuis' => $no_kuis,
            'poin_user' => $poin_user
        ])->with('data_kuis',$data_kuis);
    }
    public function next8()
    {
        global $no_kuis;
        global $poin_user;
        $data_kuis = kuis::all();
        $no_kuis += 8;
        return view('kuis', [
            'title' => 'KUIS',
            'no_kuis' => $no_kuis,
            'poin_user' => $poin_user
        ])->with('data_kuis',$data_kuis);
    }
    public function next9()
    {
        global $no_kuis;
        global $poin_user;
        $data_kuis = kuis::all();
        $no_kuis += 9;
        return view('kuis', [
            'title' => 'KUIS',
            'no_kuis' => $no_kuis,
            'poin_user' => $poin_user
        ])->with('data_kuis',$data_kuis);
    }
    public function next10()
    {
        global $no_kuis;
        global $poin_user;
        $data_kuis = kuis::all();
        $no_kuis += 10;
        return view('kuis', [
                    'title' => 'KUIS',
                    'poin_user' => $poin_user,
                    'no_kuis' => $no_kuis
                ])->with('data_kuis', $data_kuis);
    }
}
