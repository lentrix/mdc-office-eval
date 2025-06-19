@extends('base')

@section('content')

<div class="container my-4" style="min-height: 85vh;">
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
                        <li class="list-group-item text-center"><strong>Total Number of Evaluations:</strong><h3>{{ $office->evaluations->count() }}</h3></li>
                        <li class="list-group-item text-center">
                            <strong>{{ DateTime::createFromFormat('!m', $month)->format('F') }} {{ $year }} Evaluations:</strong>
                            <h3>{{ $office->monthlyEvaluationsCount($month, $year) }}</h3>
                        </li>
                        <li class="list-group-item text-center"><strong>General Rating:</strong><h3>{{ number_format($office->generalRating, 2) }}</h3></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Per Item Summary</h3>
                <form action="{{route('offices.show', $office)}}" method="GET">
                    <div class="input-group">
                        <select name="month" class="form-select">
                            @foreach(range(1,12) as $m)
                                <option value="{{ $m }}" {{ request('month', now()->month) == $m ? 'selected' : '' }}>
                                    {{ DateTime::createFromFormat('!m', $m)->format('F') }}
                                </option>
                            @endforeach
                        </select>
                        <select name="year" class="form-select">
                            @php
                                $currentYear = now()->year;
                            @endphp
                            @for($y = $currentYear - 5; $y <= $currentYear; $y++)
                                <option value="{{ $y }}" {{ request('year', $currentYear) == $y ? 'selected' : '' }}>
                                    {{ $y }}
                                </option>
                            @endfor
                        </select>
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </form>

            </div>
            <table class="table table-bordered table-striped mt-3">
                <thead>
                    <tr>
                        <th class="bg-primary text-white">Item</th>
                        <th class="text-center bg-primary text-white">Rating</th>
                    </tr>
                </thead>
                @php $sum = 0; $count = 0; @endphp
                <tbody>
                    @foreach(config('questions.questions') as $index=>$question)
                        <tr>
                            <td>{{ $question }}</td>
                            <td class="text-center">{{ number_format($rating = $office->monthlyItemRating($index, $month, $year), 2) }}</td>
                        </tr>
                        @php $sum += $rating; $count++; @endphp
                    @endforeach
                    <tr class="table-secondary">
                        <td><strong>Average Rating</strong></td>
                        <td class="text-center"><strong>{{ number_format($sum / $count, 2) }}</strong></td>
                    </tr>
                </tbody>
            </table>

            <h4>Comments</h4>
            <ul class="list-group">
                @foreach($office->monthlyComments($month, $year) as $comment)
                    <li class="list-group-item">
                        {{ $comment }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
