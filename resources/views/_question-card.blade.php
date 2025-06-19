<div class="card mb-4 shadow">
    <div class="card-body">
        <span class="fw-bold">{{ $question }}</span>
    </div>
    <div class="card-footer">
        @php $selection = [5=> 'Strongly Agree', 4 => 'Agree', 3 => 'Neutral', 2 => 'Disagree', 1 => 'Strongly Disagree']; @endphp

        <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 0.5rem;">
        @foreach($selection as $i => $label)
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: start;" class="border rounded p-2 bg-secondary">
                <input class="form-check-input" type="radio" name="ratings[{{$index}}]" id="ratings{{$index}}_{{ $i }}" value="{{ $i }}" required>
                <label class="form-check-label text-center" for="ratings{{$index}}_{{ $i }}">{{ $label }}</label>
            </div>
        @endforeach
        </div>
    </div>
</div>

