@extends('master')


@section('content')
    <div class="container">
        <div class="card rounded-0  border-0 mb-5">
            <div class="card-header card-text lead  bg-warning border-0 rounded-0 =">
                কুইজ প্রশ্ন


            </div>
            <div class="card-body m-0 p-0 py-3 my-4">
                <h5 class="card-title fw-bold">হ্যালো সুপার স্টারস</h5>
                <p class="card-text"><span class="fw-bolder">Hello Superstars</span> একটি সামাজিক যোগাযোগ মাধ্যম, যা ফ্যানদের
                    আর তাদের প্রিয় সুপারস্টারদের মধ্যে সেতুবন্ধন তৈরী করবে। সারাবিশ্বে জুড়ে তারকা আর ভক্তদের দূরত্ব ঘুচে
                    যাবে। পৃথিবীতে এটাই প্রথম পূর্ণাঙ্গ প্ল্যাটফর্ম যা সকল ক্ষেত্রের তারকাদের সাথে বিভিন্ন মড্যুলে
                    ইন্টারএকশন করার সুযোগ করে দিচ্ছে। এই ডায়নামিক ৯টি মড্যুল খুব শীঘ্রই আসছে।
                    আপনার ডিভাইসে। <br /><br />
                    ✨ সুপারস্টাররা আসছে!<br />
                    আপনি রেডি তো 💁‍💁 ..?</p>
                <a href="https://play.google.com/store/apps/details?id=com.hellosuperstars&hl=en&gl=US" target="_blank">
                    <img src="{{ asset('asset/android.png') }}" alt="" class="android"></a>

            </div>



            <form class="row mb-3 input-card" method="POST" action="{{ route('quizDataSubmit') }}">
                @csrf
                <div class="col-lg-7 p-3 col-12 mb-3">
                    <div class=" p-3 ">
                        <div class="form-group mb-2">
                            <h3 class="cadr-text lead qustion-title"> <img src="{{ asset('asset/qs.png') }}" class="qustion"
                                    alt="">
                                বিশ্বকাপের
                                সর্বোচ্চ গোলদাতার নাম কি ?</h3>

                            <input type="hidden" name="quiz_question" value="বিশ্বকাপের সর্বোচ্চ গোলদাতার নাম কি">
                            <div class="row px-4">
                                <div class="d-flex col-md-6 mb-3 form-check align-items-center">
                                    <input class="form-check-input" type="radio" name="quiz_value" value="লিওনেল মেসি"
                                        id="ans1">
                                    <label class="form-check-label px-2" for="ans1">
                                        লিওনেল মেসি <img src="{{ asset('asset/messi.jpg') }}" alt=""
                                            class="star-img">
                                    </label>
                                </div>
                                <div class="d-flex col-md-6 mb-3 form-check align-items-center">
                                    <input class="form-check-input" type="radio" name="quiz_value" value="পেলে"
                                        id="ans2">
                                    <label class="form-check-label px-2" for="ans2">
                                        পেলে <img src="{{ asset('asset/pele.jpg') }}" alt="" class="star-img">
                                    </label>
                                </div>
                                <div class="d-flex col-md-6 mb-3 form-check align-items-center">
                                    <input class="form-check-input" type="radio" name="quiz_value" value="রোনালদো"
                                        id="ans3">
                                    <label class="form-check-label px-2" for="ans3">
                                        রোনালদো <img src="{{ asset('asset/rolando.jpg') }}" alt="" class="star-img">
                                    </label>
                                </div>
                                <div class="d-flex col-md-6 mb-3 form-check align-items-center">
                                    <input class="form-check-input" type="radio" name="quiz_value"
                                        value="মিরোস্লাভ ক্লোসা" id="ans4">
                                    <label class="form-check-label px-2" for="ans4">
                                        মিরোস্লাভ ক্লোসা <img src="{{ asset('asset/closa.webp') }}" alt=""
                                            class="star-img">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  col-12 mb-3">

                    <div class=" p-3 ">
                        <div class="form-group mb-2">
                            <label for="disabledTextInput" class=" card-text lead qustion-title">আপনি কোন দেশ
                                সমর্থন
                                করছেন?</label>


                            <select id="disabledSelect" name="country" class="form-control mt-2 ">
                                <option select value="">দেশের নাম সিলেক্ট করুন</option>
                                <option value="আর্জেন্টিনা">আর্জেন্টিনা</option>
                                <option value="ব্রাজিল">ব্রাজিল</option>
                                <option value="স্পেন">স্পেন</option>
                                <option value="ফ্রান্স">ফ্রান্স</option>
                                <option value="ইংল্যান্ড">ইংল্যান্ড</option>
                                <option value="পর্তুগাল">পর্তুগাল</option>
                                <option value="দক্ষিন করিয়া">দক্ষিন করিয়া</option>
                                <option value="পোল্যান্ড">পোল্যান্ড</option>
                                <option value="নেদারল্যান্ডস">নেদারল্যান্ডস</option>
                                <option value="সুইজারল্যান্ড">সুইজারল্যান্ড</option>
                                <option value="সেনেগাল">সেনেগাল</option>
                                <option value="ক্রোয়েশিয়া">ক্রোয়েশিয়া</option>
                                <option value="জাপান">জাপান</option>
                                <option value="মরক্কো">মরক্কো</option>
                                <option value="অস্ট্রেলিয়া">অস্ট্রেলিয়া</option>
                                <option value="আমেরিকা">আমেরিকা</option>
                            </select>

                            <label for="disabledTextInput" class=" card-text lead mt-3">জার্সি সাইজ</label>
                            <div class="row p-2">
                                <div class="col-2 form-check">
                                    <input class="form-check-input" type="radio" name="size" value="S"
                                        id="">
                                    <label class="form-check-label" for="">
                                        S
                                    </label>
                                </div>
                                <div class="col-2 form-check">
                                    <input class="form-check-input" type="radio" name="size" value="M"
                                        id="">
                                    <label class="form-check-label" for="">
                                        M
                                    </label>
                                </div>
                                <div class="col-2 form-check">
                                    <input class="form-check-input" type="radio" name="size" value="L"
                                        id="">
                                    <label class="form-check-label" for="">
                                        L
                                    </label>
                                </div>
                                <div class="col-2 form-check">
                                    <input class="form-check-input" type="radio" name="size" value="XL"
                                        id="">
                                    <label class="form-check-label" for="">
                                        XL
                                    </label>
                                </div>
                                <div class="col-2 form-check">
                                    <input class="form-check-input" type="radio" name="size" value="XXL"
                                        id="">
                                    <label class="form-check-label" for="">
                                        XXL
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <center>
                    <div class="col-md-2">
                        <small class="text-danger">{!! \Session::get('error') !!}</small> <br>
                        <button type="submit" class="btn btn-outline-warning my-4">submit</button>

                    </div>
                </center>
            </form>
        </div>
    </div>
@endsection
