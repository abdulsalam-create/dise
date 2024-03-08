@extends('layouts.admin')
@section('content')


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Where to Section</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                    
                                    <th class="col">Img</th>
                                    <th scope="col">Main text</th>
                                    
                                    
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allvid as $item)
                                <tr>
                                    <td> <img src="{{ url($item->img) }}" class="rounded-sm avatar-lg img-fluid"
                                        style="width: 150px !important;"> </td>
                                    <td>{!!$item->over_desc !!}</td>
                                    
                                    <td><a class="btn btn-sm btn-primary" href="{{ route('edit.vid',$item->id) }}">Detail</a></td>
                                </tr>
                                @endforeach
                          
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
@endsection
