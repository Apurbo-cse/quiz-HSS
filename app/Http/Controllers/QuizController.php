<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuizController extends Controller
{
    /**
     * quiz join
     */

    public function index()
    {
        if (Session::has('email') || Session::has('phone')) {
            return redirect()->route('quizBody');
        }
        return view('quiz.index');
    }
    public function quizJoin(Request $request)
    {
        if (isset($request->email) || isset($request->phone)) {
            $user = User::where('email', $request->email)->orWhere('phone', $request->phone)->first();
            if ($user) {
                $registerUser = Quiz::where('userEmail', $request->email)->orWhere('userPhone', $request->phone)->first();
                if ($registerUser) {
                    return redirect()->back()->with("error", "আপনি ইতিমধ্যে নিবন্ধিত, ধন্যবাদ");
                } else {
                    Session::put('email', $user->email);
                    Session::put('phone', $user->phone);
                    return redirect()->route('quizBody');
                }
            } else {
                return redirect()->back()->with("error", "ব্যবহারকারী পাওয়া যায়নি, অ্যাপে নিবন্ধন করুন");
            }
        } else {
            return redirect()->back()->with("error", "ফোন নাম্বার ও ইমেইল ব্যবহার করুন");
        }
    }

    public function quizBody()
    {
        if (Session::has('email') || Session::has('phone')) {
            return view('quiz.quizBody');
        } else {
            return redirect()->route('index');
        }
    }
    public function quizSubmit(Request $request)
    {

        if (isset($request->quiz_value) && isset($request->country) && isset($request->size)) {
            $quiz = new Quiz();
            $quiz->userPhone = Session::get('phone');
            $quiz->userEmail = Session::get('email');
            $quiz->question = $request->quiz_question;
            $quiz->answer = $request->quiz_value;
            $quiz->country = $request->country;
            $quiz->size = $request->size;
            $quiz->save();
            return redirect()->route('thanks');
        } else {
            return redirect()->back()->with("error", "তথ্য দিয়ে সমস্ত ডেটা পূরণ করুন");
        }
    }

    public function thanks()
    {
        if (Session::has('email') || Session::has('phone')) {
            return view('quiz.quizThanks');
        } else {
            return redirect()->route('index');
        }
    }

    public function logout()
    {
        Session::forget('email');
        Session::forget('phone');
        return redirect()->route('index');
    }
}