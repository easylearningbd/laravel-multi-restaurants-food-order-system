@extends('frontend.dashboard.dashboard')
@section('dashboard')
 
<section class="section pt-5 pb-5 osahan-not-found-page">
    <div class="container">
       <div class="row">
          <div class="col-md-12 text-center pt-5 pb-5">
             <img class="img-fluid" src="{{ asset('frontend/img/404.png') }}" alt="404">
             <h1 class="mt-2 mb-2">Order Complete Thanks </h1>
             <p> </p>
             <a class="btn btn-primary btn-lg" href="{{ url('/') }}">GO HOME</a>
          </div>
       </div>
    </div>
 </section>

@endsection