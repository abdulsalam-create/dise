@extends('layouts.admin')
@section('content')
@foreach($allcollection as $item)

    <form method="POST" action="{{ route('collection.update', $item->id)  }}" enctype="multipart/form-data">
        @csrf

        <div class="container-fluid pt-4 px-4 ">
            <div class="row g-4">


                <div class="col-sm-12 col-xl-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        <input type="hidden" name="id" value="">
                        <h6 class="mb-4">Edit Monetise Image</h6>
                        
                        <div class="form-floating">
                            <div class="mb-3">
                                <input class="form-control bg-dark" name="b_img" type="file" id="image-upload">
                                <label for="formFile" class="form-label">Select Banner Image</label>
                                <div id="preview-container" class="rounded mod-imgselect"></div>
                            </div>
    
                        </div>

                   
                    

                        <button type="submit" class="btn btn-primary mt-5">Submit</button>



                    </div>

                </div>
            </div>
        </div>
    </form>
    @endforeach
@endsection
