@extends('master')

@section('content')
<div class="card rounded-0  border-0 mb-5">

    <div class="card-header card-text lead  bg-warning border-0 rounded-0 =">
        Quiz Question
    </div>

    <div class="card-body m-0 p-0 py-3 my-4">
        <h5 class="card-title">FIFA World Cup 2022, Qatar</h5>
        <p class="card-text">Hello Superstars is an innovative social media network that will build the
            bridge between superstars and their fans/followers. Here amazingly innovative ideas will close
            the ever-existent distance between celebrities and their fans, all over the globe. The first
            fully-fledged platform to offer dependable two-way communication between the stars and their
            admirers from all the variety of sectors. It is a mobile application where superstars will
            register themselves to upload their unique activities which can be followed by the fans who are
            also registered with the Hello Super Stars app. There will be 8 contents that will be operated
            within this app.</p>


    </div>

    <form class="row mb-3 input-card" method="POST" action="{{ route('quizDataSubmit') }}">
        @csrf
        <div class="col-lg-7 p-3 col-12 mb-3">
            <div class=" p-3 ">
                <div class="form-group mb-2">
                    <h3 class="cadr-text lead qustion-title"> <img src="./qs.png" class="qustion" alt="">
                        বিশ্বকাপের
                        সর্বোচ্চ গোলদাতার নাম কি ?</h3>

                    <input type="hidden" name="quiz_question" value="বিশ্বকাপের সর্বোচ্চ গোলদাতার নাম কি">


                    <input type="hidden" name="email" required="" value="{{ $User->email }}">
                    <input type="hidden" name="phone" required="" value={{ $User->phone }}>

                    <div class="row px-4">
                        <div class="d-flex col-md-6 mb-3 form-check align-items-center">
                            <input class="form-check-input" type="radio" name="quiz_valu" value="লিওনেল মেসি" required id="flexRadioDefault1">
                            <label class="form-check-label px-2" for="flexRadioDefault1">
                                লিওনেল মেসি <img src="{{ asset('asset/messi.jpg') }}" alt="" class="star-img">
                            </label>
                        </div>
                        <div class="d-flex col-md-6 mb-3 form-check align-items-center">
                            <input class="form-check-input" type="radio" name="quiz_valu" value="পেলে" required id="flexRadioDefault1">
                            <label class="form-check-label px-2" for="flexRadioDefault1">
                                পেলে <img src="{{ asset('asset/pele.jpg') }}" alt="" class="star-img">
                            </label>
                        </div>
                        <div class="d-flex col-md-6 mb-3 form-check align-items-center">
                            <input class="form-check-input" type="radio" name="quiz_valu" value="রোনালদো" required id="flexRadioDefault1">
                            <label class="form-check-label px-2" for="flexRadioDefault1">
                                রোনালদো <img src="{{ asset('asset/rolando.jpg') }}" alt="" class="star-img">
                            </label>
                        </div>
                        <div class="d-flex col-md-6 mb-3 form-check align-items-center">
                            <input class="form-check-input" type="radio" name="quiz_valu" required value="মিরোস্লাভ ক্লোসা" id="flexRadioDefault1">
                            <label class="form-check-label px-2" for="flexRadioDefault1">
                                মিরোস্লাভ ক্লোসা <img src="{{ asset('asset/closa.webp') }}" alt="" class="star-img">
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


                    <select id="disabledSelect" name="country" class="form-control mt-2 " required>
                        <option select value="">দেশের নাম সিলেক্ট করুন</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Brazil">Brazil</option>
                        <option value="France">France</option>
                        <option value="Spain">Spain</option>
                        <option value="England">England</option>
                        <option value="South Korea">South Korea</option>
                    </select>

                    <label for="disabledTextInput" class=" card-text lead mt-3">জার্সি সাইজ</label>
                    <div class="row p-2">
                        <div class="col-2 form-check">
                            <input class="form-check-input" type="radio" name="size" value="S" id="flexRadioDefault1" required>
                            <label class="form-check-label" for="flexRadioDefault1">
                                S
                            </label>
                        </div>
                        <div class="col-2 form-check">
                            <input class="form-check-input" type="radio" name="size" value="M" id="flexRadioDefault1" required>
                            <label class="form-check-label" for="flexRadioDefault1">
                                M
                            </label>
                        </div>
                        <div class="col-2 form-check">
                            <input class="form-check-input" type="radio" name="size" value="L" id="flexRadioDefault1" required>
                            <label class="form-check-label" for="flexRadioDefault1">
                                L
                            </label>
                        </div>
                        <div class="col-2 form-check">
                            <input class="form-check-input" type="radio" name="size" value="XL" id="flexRadioDefault1" required>
                            <label class="form-check-label" for="flexRadioDefault1">
                                XL
                            </label>
                        </div>
                        <div class="col-2 form-check">
                            <input class="form-check-input" type="radio" name="size" value="XXL" id="flexRadioDefault1" required>
                            <label class="form-check-label" for="flexRadioDefault1">
                                XXL
                            </label>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <center>
            <div class="col-md-2">
                <button type="submit" class="btn btn-outline-warning my-4">Submit</button>
            </div>
        </center>

    </form>

</div>


@endsection