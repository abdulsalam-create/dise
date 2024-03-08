@extends('layouts.admin')
@section('content')


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Upload Resource</h6>
                        <a href="{{ route('add.resource') }}">Add New Resource</a>

                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">

                                    <th class="col">Img</th>
                                    <th scope="col">Title</th>
                                    
                                    
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allResource as $item)
                                <tr>
                                    <td> <img src="{{ url($item->img) }}" class="rounded-sm avatar-lg img-fluid"
                                        style="width: 150px !important;"> </td>
                                    <td>{{$item->name}}</td>
                                    
                                    
                                    <td><a class="btn btn-sm btn-primary" href="{{ route('edit.resource',$item->id) }}">Detail</a></td>
                                      <td> <form action="{{ route('resource.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this resource?')">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form></td>
                                </tr>
                                @endforeach
                          
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
@endsection
