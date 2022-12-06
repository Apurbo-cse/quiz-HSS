@extends('master')

@section('content')
    <div class="container">
        <div class="card rounded-0  border-0 mb-5">
            <div class="card-header card-text lead header-text  bg-warning border-0 rounded-0 =">
                <div class="d-flex justify-content-between align-items-center">
                    <div> অংশগ্রহণের জন্য আপনাকে ধন্যবাদ </div>
                    <div class="btn btn-outline-black text-dark"> <a href="{{ route('logout') }}"
                            class="text-black"><small>বেরিয়ে
                                যান</small></a>
                    </div>
                </div>

            </div>
            <div class="card-body m-0 p-0 py-5">
                <center> <img src="{{ asset('asset/Thank-you.gif') }}" class="img-fluid" alt=""></center>
            </div>
        </div>
    </div>
@endsection
