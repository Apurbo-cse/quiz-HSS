@extends('master')

@section('content')
    <div class="container">
        <div class="card rounded-0  border-0 mb-5">
            <div class="card-header card-text lead  bg-warning border-0 rounded-0 =">
                অংশগ্রহণের জন্য আপনাকে ধন্যবাদ <button><a href="{{ route('logout') }}">Logout</a></button>
            </div>
            <div class="card-body m-0 p-0 py-5">
                <center> <img src="{{ asset('asset/Thank-you.gif') }}" class="img-fluid" alt=""></center>
            </div>
        </div>
    </div>
@endsection
