@extends('master')

@section('content')
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
            <img src="{{ asset('asset/android.png') }}" alt="" class="android"></a>

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
                    <input type="text" class="form-control input" name="phone" placeholder="App registration phone Number">
                </div>
                <div class="form-group">
                    <label for="disabledSelect" class=" card-text lead">Email</label>
                    <input type="text" class="form-control input" placeholder="App registration email" name="email">
                </div>

                <button type="submit" class="btn btn-outline-warning my-4">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection