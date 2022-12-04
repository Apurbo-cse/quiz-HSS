<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;

class quizeController extends Controller
{
    /**
     * quize join
     */
    public function QuizeJoin(Request $request)
    {

        $User = User::where('email', $request->email)->orWhere('phone', $request->phone)->first();

        if (isset($User)) {
            return view('quiz.quizBody', compact('User'));
        } else {
            return redirect()->back()->with("error", "user not found plz downlode app and register");
        }
    }

    /**
     * quiz submit
     */
    public function QuizSubmit(Request $request)
    {


        if (isset($request->quiz_valu) && isset($request->country) && isset($request->size)) {
            $quiz = new Quiz();
            $quiz->userPhone = $request->phone;
            $quiz->userEmail = $request->email;
            $quiz->question = $request->quiz_question;
            $quiz->answer = $request->quiz_valu;
            $quiz->country = $request->country;
            $quiz->size = $request->size;
            $quiz->save();
        }




        return view('quiz.quizThanks');
    }
}
