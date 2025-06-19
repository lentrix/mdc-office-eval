@extends('base')

@section('content')

    <section class="vh-100 d-flex align-items-center bg-light">
        <div class="container">
            <div class="row justify-content-center rounded-3 p-5 shadow-lg" style="background-image: url('{{ asset('images/background.jpg') }}'); background-size: cover; background-position: center;">
                <div class="col-lg-7 text-center">
                    <img src="{{ asset('images/MDC-Logo-clipped.png') }}" alt="Feedback" class="mb-4" style="max-width: 180px;">
                    <h1 class="display-4 fw-bold mb-3 text-white">Welcome to the MDC Customer-Based Office Evaluation Portal</h1>
                    <p class="lead mb-4 text-light">
                        Your voice matters! Help us improve our college by sharing your thoughts, suggestions, and experiences.
                    </p>
                    <div>
                        <button type="button" class="btn btn-primary btn-lg shadow" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Make an Evaluation
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Select Office</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="list-group">
                                    @foreach($offices as $office)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="{{ route('eval.create', ['office' => $office->id]) }}" class="text-decoration-none text-dark">
                                                {{ $office->name }}
                                            </a>
                                            <span class="badge bg-primary rounded-pill">{{ $office->evaluation_count }}</span>
                                    @endforeach
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
