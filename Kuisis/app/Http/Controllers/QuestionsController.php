<?php

namespace App\Http\Controllers;

use App\Models\questions;
use App\Http\Requests\StorequestionsRequest;
use App\Http\Requests\UpdatequestionsRequest;

class QuestionsController extends Controller
{
    public function question()
    {
        $no_kuis = 0;
        $data_questions = questions::all();
        return view('question', [
            'title' => 'QUIZ',
            'data_questions' => $data_questions,
            'no_kuis' => $no_kuis
        ]);
    }
}
