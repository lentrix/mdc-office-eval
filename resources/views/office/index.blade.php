@extends('base')

@section('content')

<div class="container mt-4" style="min-height: 85vh;">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Offices</h1>
        @include('office._create-office-modal')
    </div>
    <hr>
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-3">
        @foreach($offices as $office)
            <a href="{{route('offices.show', $office)}}" class="col text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{$office->name}}</h5>
                        <p class="card-text">General Rating: <span class="text-primary fw-bold">{{number_format($office->general_rating, 2)}}</span></p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>


@endsection
