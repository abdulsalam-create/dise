@extends('layouts.admin')
@section('content')





<!-- Form Start -->
@foreach($consult as $item)
<form method="POST" action="{{ route('consult.store', $item->id)  }}" enctype="multipart/form-data">
    @csrf

    <div class="container-fluid pt-4 px-4 ">
        <div class="row g-4">


            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <input type="hidden" name="id" value="">
                    <h6 class="mb-4">Consultation Info</h6>
                    <div class="form-floating">
                        <div class="mb-3">
                            <input class="form-control bg-dark" name="b_img" type="file" id="image-upload">
                            <label for="formFile" class="form-label">First Banner Image</label>
                            <div id="preview-container" class="rounded mod-imgselect"></div>
                        </div>

                    </div>

                

                    <div class="form-floating mb-3">
                        <input type="text" name="h" class="form-control" id="floatingInput"
                            placeholder="name@example.com" value="{{$item->h}}">
                        <label for="floatingInput">Coloured Header</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="h_0" class="form-control" id="floatingInput"
                            placeholder="name@example.com" value="{{$item->h_0}}">
                        <label for="floatingInput">First Header</label>
                    </div>

                    <div class="form-floating ">
                        <div class="form-floating mb-3">
                            <textarea name="h_desc" id="trumbowyg-editor"
                                placeholder="Start typing here...">{{ old('content', $item->h_desc) }}</textarea>
                        </div>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" name="h_1" class="form-control" id="floatingInput"
                            placeholder="name@example.com" value="{{$item->h_1}}">
                        <label for="floatingInput">Header Three</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="h_2" class="form-control" id="floatingInput"
                            placeholder="name@example.com" value="{{$item->h_2}}">
                        <label for="floatingInput">Header Three(Animated)</label>
                    </div>


                    <div class="form-floating">
                        <div class="mb-3">
                            <input class="form-control bg-dark" name="f_img" type="file" id="image-upload1">
                            <label for="formFile" class="form-label">Second Banner Image</label>
                            <div id="preview-container1" class="rounded mod-imgselect"></div>
                        </div>

                    </div>
                    <div class="form-floating ">
                        <div class="form-floating mb-3">
                            <textarea name="h_0_desc" id="trumbowyg-editor"
                                placeholder="Start typing here...">{{ old('content', $item->h_0_desc) }}</textarea>
                        </div>
                    </div>

                  


                    <div class="form-floating mb-3">
                        <input type="text" name="h_3" class="form-control" id="floatingInput"
                            placeholder="name@example.com" value="{{$item->h_3}}">
                        <label for="floatingInput">Large Mid header</label>
                    </div>



                    <div class="form-floating ">
                        <div class="form-floating mb-3">
                            <textarea name="h_1_desc" id="trumbowyg-editor"
                                placeholder="Start typing here...">{{ old('content', $item->h_1_desc) }}</textarea>
                        </div>
                    </div>


                    <div class="form-floating ">
                        <div class="form-floating mb-3">
                            <textarea name="h_2_desc" id="trumbowyg-editor"
                                placeholder="Start typing here...">{{ old('content', $item->h_2_desc) }}</textarea>
                        </div>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" name="h_4" class="form-control" id="floatingInput"
                            placeholder="name@example.com" value="{{$item->h_4}}">
                        <label for="floatingInput">Ready for your session(header)</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" name="h_5" class="form-control" id="floatingInput"
                            placeholder="name@example.com" value="{{$item->h_5}}">
                        <label for="floatingInput">Concluding Header</label>
                    </div>


                    <div class="form-floating ">
                        <div class="form-floating mb-3">
                            <textarea name="h_3_desc" id="trumbowyg-editor"
                                placeholder="Start typing here...">{{ old('content', $item->h_3_desc) }}</textarea>
                        </div>
                    </div>

                    <div class="form-floating">
                        <div class="mb-3">
                            <input class="form-control bg-dark" name="f_img2" type="file" id="image-upload2">
                            <label for="formFile" class="form-label">Author Mini Image</label>
                            <div id="preview-container2" class="rounded mod-imgselect"></div>
                        </div>

                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="h_6" class="form-control" id="floatingInput"
                            placeholder="name@example.com" value="{{$item->h_6}}">
                        <label for="floatingInput">Author Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="h_7" class="form-control" id="floatingInput"
                            placeholder="name@example.com" value="{{$item->h_7}}">
                        <label for="floatingInput">Author title</label>
                    </div>


                    <button type="submit" class="btn btn-primary mt-5">Submit</button>



                </div>

            </div>
        </div>
    </div>

</form>

@endforeach



@endsection