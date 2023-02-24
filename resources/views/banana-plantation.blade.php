@extends('default')
 
@section('content')

     <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="{{route('index')}}/assets/img/bg-masthead.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Plantations</h4>
                            <p class="text-black-50 mb-0">A plantation is an agricultural estate, generally centered on a plantation house, meant for farming that specializes in cash crops</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
