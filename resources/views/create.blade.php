@extends('base')
@section('content')

    <div class="container mb-3" style="min-height: 80vh;">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <h1 class="text-center">Make Evaluation</h1>
                <h3 class="text-center mb-3">{{ $office->name }}</h3>
                <form action="{{ route('eval.store', $office->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="office_id" value="{{ $office->id }}">

                    @foreach($questions as $index=>$question)

                        @include('_question-card', ['question' => $question, 'index' => $index])

                    @endforeach

                    <div class="mb-3">
                        <label for="comments" class="form-label">Comment/Suggestion</label>
                        <textarea name="comments" id="comments" rows="4" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit Evaluation</button>
                </form>
            </div>
        </div>
    </div>

@endsection
