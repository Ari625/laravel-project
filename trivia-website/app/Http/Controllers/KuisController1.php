<?php

namespace App\Http\Controllers;

use App\Models\kuis;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorekuisRequest;
use App\Http\Requests\UpdatekuisRequest;
use Illuminate\Http\Request;

class KuisController1 extends Controller
{

    public function kuis1(){
        $no_kuis = 1 ;
        $data_kuis = kuis::all();
        global $poin_user;
        return view('kuis', [
            'title' => 'KUIS',
            'no_kuis' => $no_kuis,
            'poin_user' => $poin_user
        ])->with('data_kuis',$data_kuis);
    }

    public function answers1(Request $request)
   {
       $data_kuis = kuis::all();
       $validateData = $request->validate([
           'no_kuis' => 'required',
           'answer' => 'required',
           'answer_user' => 'required',
           'poin_user' => 'required'
       ]);

       $answer_user = $validateData['answer_user'];
       $no_kuis = $validateData['no_kuis'];
       $answer = $validateData['answer'];
       $poin_user = $validateData['poin_user'];

       if ($answer_user === $answer){
           $poin_user += 10;
            return redirect('correct')->with('poin_user', $poin_user);
       } else {
           $poin_user += 0;
           return redirect('wrong')->with('wrong','Wrong');
       }
   }

    public function finish()
    {
        global $poin_user;
        return view('finish-kuis',[
            'title' => 'FINISH'
        ])->with('poin_user',$poin_user);
    }
}
// redirect()->route('RouteName',[
//     'name' => 'kuis',
//     'number' => $no_kuis
// ])

 //    $poin_user = 0 ;

    //    $answer = $data_kuis([$no_kuis]['answer']);

    // view('correction',[
    //         'title' => 'KUIS',
    //         'no_kuis' => $no_kuis,
    //         'poin_user' => $poin_user
    //    ])->with('correct','Correct')->with('data_kuis',$data_kuis);

    // view('correction',[
    //         'title' => 'KUIS',
    //         'no_kuis' => $no_kuis,
    //         'data_kuis' => $data_kuis,
    //         'poin_user' => $poin_user
    //    ])->with('wrong','Wrong')->with('data_kuis',$data_kuis);