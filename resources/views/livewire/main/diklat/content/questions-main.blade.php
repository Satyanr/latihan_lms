<div>
    <form wire:submit.prevent="storeAnswers" id="quizForm">
        <div class="card">
            <div class="card-header text-center">
                {{ $quiz->question->count() }} Soal
            </div>
            @foreach ($questions as $index => $question)
                <div class="card-body border my-3">
                    <h5 class="card-title my-3">{{ $question->question }}</h5>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="radio" id="Radio{{ $question->id }}1"
                            wire:model="answers.{{ $index }}" value="{{ $question->option_1 }}">
                        <label class="form-check-label"
                            for="Radio{{ $question->id }}1">{{ $question->option_1 }}</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="Radio{{ $question->id }}2"
                            wire:model="answers.{{ $index }}" value="{{ $question->option_2 }}">
                        <label class="form-check-label"
                            for="Radio{{ $question->id }}2">{{ $question->option_2 }}</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="Radio{{ $question->id }}2"
                            wire:model="answers.{{ $index }}" value="{{ $question->option_3 }}">
                        <label class="form-check-label"
                            for="Radio{{ $question->id }}3">{{ $question->option_3 }}</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="Radio{{ $question->id }}2"
                            wire:model="answers.{{ $index }}" value="{{ $question->option_4 }}">
                        <label class="form-check-label"
                            for="Radio{{ $question->id }}4">{{ $question->option_4 }}</label>
                    </div>
                </div>
            @endforeach
            <button type="submit" id="submitBtn" onclick="stopCountdown()">Submit</button>
            <div class="card-footer text-muted text-center">
                Durasi: <span wire:model='sisa_waktu' id="countdown">{{ $quiz->durasi }}</span> seconds
            </div>
        </div>
    </form>
</div>
