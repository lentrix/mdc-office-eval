@extends('base')
@section('content')

    <div class="container mb-3" style="min-height: 80vh;">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <h1 class="text-center">Thank You!</h1>
                <p class="text-center">Your evaluation has been successfully submitted.</p>
                <p class="text-center">We appreciate your feedback and will use it to improve our services.</p>
                <div class="text-center">
                    <a href="{{ route('welcome') }}" class="btn btn-primary">Return to Home</a>
                </div>
            </div>
        </div>
    </div>

@endsection
