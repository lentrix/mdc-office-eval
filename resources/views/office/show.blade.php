@extends('base')

@section('content')

<div class="container mt-4" style="min-height: 85vh;">
    <div class="d-flex justify-content-between align-items-center">
        <h1>{{ $office->name }}</h1>
        <div class="d-flex justify-content-end align-items-center gap-2">
            @include('office._edit-office-modal')
            @include('office._delete-office-modal')
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <h3>Office Details</h3>
            <div class="card mt-3">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center"><strong>Serial:</strong> <h3>{{ str_pad($office->id, 6, '0', STR_PAD_LEFT) }}</h3></li>
                        <li class="list-group-item text-center"><strong>Office Head:</strong><h5>{{ $office->office_head }}<h5></li>
                        <li class="list-group-item text-center"><strong>Number of Evaluations:</strong><h3>{{ $office->evaluations->count() }}</h3></li>
                        <li class="list-group-item text-center"><strong>General Rating:</strong><h3>{{ $office->generalRating }}</h3></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <h3>Per Item Summary</h3>
            <table class="table table-bordered table-striped mt-3">
                <thead>
                    <tr>
                        <th class="bg-primary text-white">Item</th>
                        <th class="text-center bg-primary text-white">Rating</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(config('questions.questions') as $index=>$question)
                        <tr>
                            <td>{{ $question }}</td>
                            <td class="text-center">{{ $office->generalItemRating($index) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
