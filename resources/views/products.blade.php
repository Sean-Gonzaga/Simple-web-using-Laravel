@extends('default')
 
@section('content')

     <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/products.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Products</h4>
                            <p class="text-black-50 mb-0">The production of farm products involves several stages, including land preparation, planting, harvesting, and processing. 
                                These stages require various inputs, such as seeds, fertilizers, pesticides, and labor. 
                                The cost of production for each farm product can vary depending on factors such as weather, labor costs, and the availability of inputs.</p>
                        </div>
                    </div>
                </div>
    @foreach ($product_info as $list)
        @if ($loop->odd)
    
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ $list ['img']}}" width="700" 
                        height="500" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">{{ $list ['type']}}</h4>
                                    <p class="mb-0 text-white-50">{{ $list ['desc']}}</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                 <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ $list ['img']}}" width="700" 
                        height="500" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">{{ $list ['type']}}</h4>
                                    <p class="mb-0 text-white-50">{{ $list ['desc']}}</p>
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


