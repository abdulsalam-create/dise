@extends('layouts.admin')
@section('content')
<form method="POST" action="{{ route('send.mail') }}" enctype="multipart/form-data">
    @csrf

    <div class="container-fluid pt-4 px-4 ">
        <div class="row g-4">


            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <input type="hidden" name="id" value="">
                    <h6 class="mb-4">Mass Mailer</h6>
                    <div class="form-floating mb-3">
                        <input type="text" name="subject" class="form-control" id="floatingInput"
                            placeholder="name@example.com" value="">
                        <label for="floatingInput">Blog Title</label>
                    </div>

                    <section>
                        {{-- <div class="form-floating">
                            <div class="form-floating mb-3">
                                <input type="text" name="desc" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" value="">
                                <label for="floatingInput">Blog Paragraph</label>
                            </div>

                        </div> --}}

                        <div class="form-floating ">
                            <div class="form-floating mb-3">
                                <textarea name="message" id="trumbowyg-editor"
                                    ></textarea>
                            </div>
                        </div>

                      

                    </section>

                 
                    <button type="submit" class="btn btn-primary mt-5">Submit</button>


                </div>

            </div>
        </div>
    </div>
</form>
@endsection