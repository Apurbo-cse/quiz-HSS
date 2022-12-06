<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * quiz join
     */
    public function quizJoin(Request $request)
    {
        if (isset($request->email) || isset($request->phone)) {
            $user = User::where('email', $request->email)->orWhere('phone', $request->phone)->first();
            if ($user) {
                $registerUser = Quiz::where('userEmail', $request->email)->orWhere('userPhone', $request->phone)->first();
                if ($registerUser) {
                    return redirect()->back()->with("error", "আপনি ইতিমধ্যে নিবন্ধিত, ধন্যবাদ");
                } else {
                    return view('quiz.quizBody', compact('user'));
                }
            } else {
                return redirect()->back()->with("error", "ব্যবহারকারী পাওয়া যায়নি, আগে অ্যাপ নিবন্ধন করুন ");
            }
        } else {
            return redirect()->back()->with("error", "অ্যাপ ডাউনলোড করুন এবং তারপর নিবন্ধন করুন");
        }
    }

    /**
     * quiz submit
     */
    public function quizSubmit(Request $request)
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