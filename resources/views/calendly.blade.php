@extends('layouts.home')
@section('content')
<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <h1 class="dancing-script-l-head">Reserve Spot </h1>
                </div>
            </div>
        </div>
    </div>
</div>


@foreach($calend as $link)
<div class="container mt-4">
    <div>
        <!-- Embed Calendly links dynamically -->
        <iframe src="{{ $link->link }}" style="border: 0; width: 100%; height: 500px;"></iframe>
    </div>
</div>
@endforeach



@endsection