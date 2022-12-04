<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSS | FIFA World Cup 2022, Qatar</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}" />
</head>

<body>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="fuild-container header-color">
        <div class="container">
            <div class=" p-3 row justify-content-between align-items-center ">
                <div class="col-lg-2 col-md-2 col-2 text-start"><img src="{{ asset('asset/logo.png') }}" alt=""
                        class="logo">
                </div>

                <div class="col-lg-4 col-md-4 col-4 text-center"><img
                        src="{{ asset('asset/FWC_qatar_landscape_logo_desktop.svg') }}" class="fifa-logo"
                        alt=""></div>

                <div class="col-lg-2 col-md-2 col-2 text-end"><img src="{{ asset('asset/2022-world-cup-emblem.webp') }}"
                        alt="" class="a-img"></div>
            </div>
        </div>
    </div>



    <div class="container">
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
                <!-- <a href="https://play.google.com/store/apps/details?id=com.hellosuperstars&hl=en&gl=US"
                         target="_blank"> <img src="./android.png" alt="" class="android"></a> -->

            </div>

            <form class="row mb-3 input-card" method="POST" action="{{ route('quizDataSubmit') }}">
                @csrf
                <div class="col-lg-7 p-3 col-12 mb-3">
                    <div class=" p-3 ">
                        <div class="form-group mb-2">
                            <h3 class="cadr-text lead qustion-title"> <img src="./qs.png" class="qustion"
                                    alt="">
                                বিশ্বকাপের
                                সর্বোচ্চ গোলদাতার নাম কি ?</h3>

                            <input type="hidden" name="quiz_question" value="বিশ্বকাপের সর্বোচ্চ গোলদাতার নাম কি">


                            <input type="hidden" name="email" required="" value="{{ $User->email }}">
                            <input type="hidden" name="phone" required="" value={{ $User->phone }}>

                            <div class="row px-4">
                                <div class="d-flex col-md-6 mb-3 form-check align-items-center">
                                    <input class="form-check-input" type="radio" name="quiz_valu" value="লিওনেল মেসি"
                                        required id="flexRadioDefault1">
                                    <label class="form-check-label px-2" for="flexRadioDefault1">
                                        লিওনেল মেসি <img src="{{ asset('asset/messi.jpg') }}" alt=""
                                            class="star-img">
                                    </label>
                                </div>
                                <div class="d-flex col-md-6 mb-3 form-check align-items-center">
                                    <input class="form-check-input" type="radio" name="quiz_valu" value="পেলে"
                                        required id="flexRadioDefault1">
                                    <label class="form-check-label px-2" for="flexRadioDefault1">
                                        পেলে <img src="{{ asset('asset/pele.jpg') }}" alt="" class="star-img">
                                    </label>
                                </div>
                                <div class="d-flex col-md-6 mb-3 form-check align-items-center">
                                    <input class="form-check-input" type="radio" name="quiz_valu" value="রোনালদো"
                                        required id="flexRadioDefault1">
                                    <label class="form-check-label px-2" for="flexRadioDefault1">
                                        রোনালদো <img src="{{ asset('asset/rolando.jpg') }}" alt=""
                                            class="star-img">
                                    </label>
                                </div>
                                <div class="d-flex col-md-6 mb-3 form-check align-items-center">
                                    <input class="form-check-input" type="radio" name="quiz_valu" required
                                        value="মিরোস্লাভ ক্লোসা" id="flexRadioDefault1">
                                    <label class="form-check-label px-2" for="flexRadioDefault1">
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
                                    <input class="form-check-input" type="radio" name="size" value="S"
                                        id="flexRadioDefault1" required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        S
                                    </label>
                                </div>
                                <div class="col-2 form-check">
                                    <input class="form-check-input" type="radio" name="size" value="M"
                                        id="flexRadioDefault1" required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        M
                                    </label>
                                </div>
                                <div class="col-2 form-check">
                                    <input class="form-check-input" type="radio" name="size" value="L"
                                        id="flexRadioDefault1" required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        L
                                    </label>
                                </div>
                                <div class="col-2 form-check">
                                    <input class="form-check-input" type="radio" name="size" value="XL"
                                        id="flexRadioDefault1" required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        XL
                                    </label>
                                </div>
                                <div class="col-2 form-check">
                                    <input class="form-check-input" type="radio" name="size" value="XXL"
                                        id="flexRadioDefault1" required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        XXL
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <center>
                    <div class="col-md-2"><button type="submit" class="btn btn-outline-warning my-4">Submit</button>
                    </div>
                </center>
            </form>
        </div>
    </div>

    <footer class=" text-center text-lg-start footer-bg  fixed-bottom">

        <div class="text-center p-3 text-dark">
            © 2022 Copyright:
            <a class="text-dark " href="https://hellosuperstars.com/">Hello Super Stars</a>
        </div>
        <!-- Copyright -->
    </footer>







</body>

</html>
