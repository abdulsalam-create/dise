@extends('layouts.admin')
@section('content')
<form method="POST" action="{{ route('resource.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="container-fluid pt-4 px-4 ">
        <div class="row g-4">


            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <input type="hidden" name="id" value="">
                    <h6 class="mb-4">Add resource</h6>
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="floatingInput"
                            placeholder="name@example.com" value="">
                        <label for="floatingInput">Blog Title</label>
                    </div>

                    <div class="form-floating">
                        <div class="mb-3">
                            <input class="form-control bg-dark" name="b_img" type="file" id="image-upload" required  title="Please select an image">
                            <label for="formFile" class="form-label">Select Banner Image</label>
                            <div id="preview-container" class="rounded mod-imgselect"></div>
                        </div>


                    <div class="form-floating">
                        <div class="mb-3">
                            <input class="form-control bg-dark" name="file" type="file" id="" required  title="Please select an image">
                            <label for="formFile" class="form-label">Upload Resource</label>
                        </div>

                    </div>

                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                    </div>

            </div>
        </div>
                </div>

            </div>
     
</form>
@endsection