@extends('layouts.home')
@section('content')
<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <h1 class="dancing-script-l-head">About </h1>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="pt-1 padding-bottom">
    <div class="container">
        <div class="row">
            @foreach($about as $item)



            <div class="row justify-content-center mt-5">
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="container">
                                <img class="img img-rounded-corners m-img"
                                    src="{{ url($item->b_img) }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="container">
                                <h3 class=" mb-4 mt-3 roboto-slab-headers">{{ $item->h_1 }}</h3>
                               
                                    {!! $item->h_1_desc !!}


                                    <h1 style="text-shadow: 2px 2px 4px #ddabab">Expertise</h1>
                                    <div class="expertise">
                                        <ul>
                                            <li>Creative Direction</li>
                                            <li>Visual Storytelling</li>
                                            <li>Content Marketing</li>
                                            <li>Strategy</li>
                                            <li>Business Development</li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                    </div>

                </div>
            </div>

            <section class="text-mdark">



                <h3 class="mb-3 mt-5 ab-h roboto-slab-headers">{{ $item->h_2 }}</h3>
                

                    {!! $item->h_2_desc !!}

                
                {{-- <p class="mb-5 text-mdark">Now that's out of the way...</p> --}}
            </section>

            <section >

                <h3 class="mb-3 mt-5 ab-h roboto-slab-headers">{{ $item->h_3 }}</h3>

                {!! $item->h_3_desc !!}

           

                <p class="mb-5 text-mdark">So, dare i say - <span class="calligraffitti-regular">Live in the fullness of your
                        creativity all day, every day!</span></p>
            </section>
@endforeach

        </div>
    </div>
    </div>
</section>



@endsection