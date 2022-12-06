@extends('master')

@section('content')
    <div class="container">
        <div class="card rounded-0  border-0 mb-5">
            <div class="card-header card-text lead  bg-warning border-0 rounded-0 =">ফুটবল বিশ্বকাপ সুপার কুইজ-২০২২ এ আপনাকে
                স্বাগতম!</div>
            <div class="card-body m-0 p-0 py-3">
                <h5 class="card-title fw-bold">হ্যালো সুপার স্টারস</h5>
                <p class="card-text">ফাইনাল পর্যন্ত চলতে থাকা এই অনলাইন ইভেন্টে অংশ নিয়ে জিতে নিন আপনার প্রিয় দলের জার্সি।
                </p>
                <span class="card-text">এপ স্টোরে যেয়ে Hello Superstars এপটি নামিয়ে খুব সহজেই রেজিস্ট্রেশন করে ফেলুন। </span>
                <span class="card-text">কুইজের উত্তর সাবমিট করে দিন আপনার এপে রেজিস্টার্ড ই-মেইল/ফোন নাম্বার দিয়ে!</span>

            </div>
            <div class="row mb-2">
                <div class="m-0 p-0"> <a href="https://play.google.com/store/apps/details?id=com.hellosuperstars&hl=en&gl=US"
                        target="_blank"class="m-0 p-0">
                        <img src="{{ asset('asset/android.png') }}" alt="" class="android"></a>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('asset/unnamed.webp') }}" alt="" class="img-fluid">
                </div>


                <form class="col-lg-4 col-md-5 col-12 mb-4" method="POST" action="{{ route('quizUserSubmit') }}">
                    @csrf
                    <div class=" p-3 input-card">
                        <div class="form-group mb-2">
                            <label for="disabledTextInput" class=" card-text lead">ফোন</label>
                            <input type="text" value="" class="form-control input" name="phone"
                                placeholder="অ্যাপ রেজিস্ট্রেশন ফোন নম্বর">
                            @if (\Session::has('error'))
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="disabledSelect" class=" card-text lead">ইমেইল</label>
                            <input type="email" value="" class="form-control input"
                                placeholder="অ্যাপ রেজিস্ট্রেশন ইমেল" name="email">
                        </div>
                        <div class="form-group">
                            <small class="text-danger">{!! \Session::get('error') !!}</small>
                        </div>
                        <button type="submit" class="btn btn-outline-warning my-4">যাচাই করুন </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
