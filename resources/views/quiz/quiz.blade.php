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
                Quiz Instructions
            </div>
            <div class="card-body m-0 p-0 py-3">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">Hello Superstars is an innovative social media network that will build the
                    bridge between superstars and their fans/followers. Here amazingly innovative ideas will close
                    the ever-existent distance between celebrities and their fans, all over the globe. The first
                    fully-fledged platform to offer dependable two-way communication between the stars and their
                    admirers from all the variety of sectors. It is a mobile application where superstars will
                    register themselves to upload their unique activities which can be followed by the fans who are
                    also registered with the Hello Super Stars app. There will be 8 contents that will be operated
                    within this app.</p>
                <a href="https://play.google.com/store/apps/details?id=com.hellosuperstars&hl=en&gl=US" target="_blank">
                    <img src="./android.png" alt="" class="android"></a>

            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <img src="{{ asset('asset/unnamed.webp') }}" alt="" class="img-fluid">
                </div>
                @if (\Session::has('error'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('error') !!}</li>
                        </ul>
                    </div>
                @endif
                <form class="col-lg-3 col-md-5 col-12 mb-3" method="POST" action="{{ route('quizUserSubmit') }}">
                    @csrf
                    <div class=" p-3 input-card">
                        <div class="form-group mb-2">
                            <label for="disabledTextInput" class=" card-text lead">Phone</label>
                            <input type="text" class="form-control input" name="phone"
                                placeholder="App registration phone Number">
                        </div>
                        <div class="form-group">
                            <label for="disabledSelect" class=" card-text lead">Email</label>
                            <input type="text" class="form-control input" placeholder="App registration email"
                                name="email">
                        </div>

                        <button type="submit" class="btn btn-outline-warning my-4">Submit</button>
                    </div>
                </form>
            </div>
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
