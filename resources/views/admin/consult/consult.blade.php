@extends('layouts.admin')
@section('content')

<div class="container-fluid pt-4 px-4">

    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Consultation Page Info</h6>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-4">

            <h6 class="mb-0">Consultation Info</h6>

        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">

                        <th scope="col">header1</th>


                        <th scope="col">header2</th>


                        <th scope="col">header3</th>

                        <th>Created At</th>
                        <th>Updated At</th>






                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($consult as $item)
                    <tr>
                        {{-- <td> <img src="{{url($item->img)}}" class="rounded-sm avatar-lg img-fluid"
                                style="width: 150px !important;"> </td>
                        <td>{{ $item->category }}</td> --}}

                        <td>{{ $item->h_1 }}</td>
                        <td>{{ $item->h_2 }}</td>
                        <td>{{ $item->h_3 }}</td>

                        <td>{{ $item->created_at->format('F d, Y') }}</td>
                        @if($item->updated_at)
                        <td>{{ $item->updated_at->format('F d, Y') }}</td>
                        @else
                        <td>{{ $item->updated_at }}</td>
                        @endif


                        <td><a class="btn btn-sm btn-primary" href="{{ route('edit.consult',$item->id) }}">Detail</a>
                        </td>
                    </tr>
                    @endforeach


                    <h5>Note:for those with the collection category they edit the about info page while those without
                        the collection category edit the "Our works" section in the about page</h5>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection