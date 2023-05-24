<div class="mt-lg-0 mt-4">
    <label class="form-label">{{ $questionItem->question }}</label>
    <div class="d-lg-flex mb-lg-5">
        @if ($answerType == 'agreement7')
            @for ($i = 0; $i < count($agreement7Answers); $i++)
                <div class="max-width-answer form-check d-flex flex-lg-column mt-lg-0 mt-1">
                    <input name="respuestas[{{ $questionItem->id }}]" class="justify-center me-lg-0 me-4 d-flex"
                        type="radio" id="respuesta{{ $questionItem->id }}" value="{{ $i + 1 }}">
                    <label class="form-check-label text-center mt-lg-2" for="respuesta{{ $questionItem->id }}">
                        {{ $agreement7Answers[$i] }}
                    </label>
                </div>
            @endfor
        @endif
    </div>
</div>
