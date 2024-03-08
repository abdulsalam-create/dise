@extends('layouts.admin')
@section('content')


<div class="container-fluid pt-4 px-4">

    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Calendly Link</h6>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-4">


        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">



                        <th scope="col">Title</th>


                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>








                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allCal as $item)
                    <tr>
                        {{-- <td> <img src="{{url($item->img)}}" class="rounded-sm avatar-lg img-fluid"
                                style="width: 150px !important;"> </td>
                        <td>{{ $item->category }}</td> --}}

                        <td>{!! $item->link !!}</td>
                        <td>{{ $item->created_at->format('F d, Y') }}</td>
                     
                        
                        @if($item->updated_at)
                            <td>{{ $item->updated_at->format('F d, Y') }}</td>
                        @else
                            <td>{{ $item->updated_at }}</td>
                        @endif



                        <td><a class="btn btn-sm btn-primary" href="{{ route('edit.cal',$item->id) }}">Detail</a></td>
                    </tr>
                    @endforeach


                    <h5>Note:copy embed link from created calendly item, Also configure payment reciepients from calendly</h5>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection