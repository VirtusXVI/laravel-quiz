<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function checkAnswer(Request $request){
        $answer = $request->all();
        if($answer['answer'] == 3){
            return redirect()->back()->with('success', 'your message,here');
        }else{
            return redirect()->back()->with('error', 'your message,here');
        }
    }
}
