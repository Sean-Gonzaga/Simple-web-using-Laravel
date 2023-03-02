@extends('template.default')
 
@section('content')

     <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/plantation.jpeg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Plantations</h4>
                            <p class="text-black-50 mb-0">Buk.Farms has a large-scale agricultural operations that focus on cultivating and harvesting 
                                crops such as fruits, vegetables, and trees for commercial purposes.</p>
                        </div>
                    </div>
                </div>
    @foreach ($project_info as $list)
        @if ($loop->odd)
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ $list ['proj_img']}}" width="700" 
                        height="auto" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">{{ $list ['proj_type']}}</h4>
                                    <p class="mb-0 text-white-50">{{ $list ['proj_desc']}}</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                 <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ $list ['proj_img']}}" width="700" 
                        height="auto" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">{{ $list ['proj_type']}}</h4>
                                    <p class="mb-0 text-white-50">{{ $list ['proj_desc']}}</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endif
    @endforeach
            </div>

        </section>

@endsection


