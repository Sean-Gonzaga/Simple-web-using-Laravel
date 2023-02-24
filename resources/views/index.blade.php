{{-- <h1>{{ $title }}</h1>
<h2>{{ $heading }}</h2>
@foreach ($product as $item)
    <h3>{{ $item['flavor'] }}</h3>
    <p>{{ $item['desc'] }}</p>
@endforeach --}}

@extends('default')

@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Buk.Farms</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Improving Farming, Improving Life.</h2>
                    <a class="btn btn-primary" href="{{route('about-us')}}">Get Started</a>
                </div>
            </div>
        </div>
    </header>
@endsection
        
        