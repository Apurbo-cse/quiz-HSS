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
        @yield('content')
    </div>
    <footer class=" text-center text-lg-start footer-bg  fixed-bottom">

        <div class="text-center p-3 text-dark">
            © 2022 Copyright:
            <a class="text-dark " href="https://hellosuperstars.com/">Hello Super Stars</a>
        </div>

    </footer>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
