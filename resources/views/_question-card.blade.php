<div class="card mb-4 shadow">
    <div class="card-body">
        <span class="fw-bold">{{ $question }}</span>
    </div>
    <div class="card-footer">
        @php $selection = [5=> 'Strongly Agree', 4 => 'Agree', 3 => 'Neutral', 2 => 'Disagree',0=>'', 1 => 'Strongly Disagree']; @endphp

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 0.5rem;">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: start;" class="border rounded p-2 bg-secondary rating-item">
                <input class="form-check-input" type="radio" name="ratings[{{$index}}]" id="ratings{{$index}}_5" value="5" required>
                <label class="form-check-label text-center" for="ratings{{$index}}_5">Strongly Agree</label>
            </div>
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: start;" class="border rounded p-2 bg-secondary rating-item">
                <input class="form-check-input" type="radio" name="ratings[{{$index}}]" id="ratings{{$index}}_4" value="4" required>
                <label class="form-check-label text-center" for="ratings{{$index}}_4">Agree</label>
            </div>
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: start;" class="border rounded p-2 bg-secondary rating-item">
                <input class="form-check-input" type="radio" name="ratings[{{$index}}]" id="ratings{{$index}}_3" value="3" required>
                <label class="form-check-label text-center" for="ratings{{$index}}_3">Neutral</label>
            </div>
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: start;" class="border rounded p-2 bg-secondary rating-item">
                <input class="form-check-input" type="radio" name="ratings[{{$index}}]" id="ratings{{$index}}_2" value="2" required>
                <label class="form-check-label text-center" for="ratings{{$index}}_2">Disagree</label>
            </div>
            <div>&nbsp;</div>
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: start;" class="border rounded p-2 bg-secondary rating-item">
                <input class="form-check-input" type="radio" name="ratings[{{$index}}]" id="ratings{{$index}}_1" value="1" required>
                <label class="form-check-label text-center" for="ratings{{$index}}_1">Strongly Disagree</label>
            </div>
        </div>
    </div>
</div>

