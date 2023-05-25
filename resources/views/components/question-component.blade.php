<div class="mt-lg-0 mt-4">
    <label class="form-label mb-4">{{ $questionItem->question }}</label>
    <div class="d-lg-flex mb-lg-5">
        @if ($answerType == 'agreement7')
            @for ($i = 0; $i < count($agreement7Answers); $i++)
                <div class="max-width-answer form-check d-flex flex-lg-column mt-lg-0 mt-1">
                    <input name="respuestas[{{ $questionItem->id }}]" class="justify-center me-lg-0 me-4 d-flex"
                        type="radio" id="respuesta{{ $questionItem->id }}_{{ $i }}"
                        value="{{ $i + 1 }}">
                    <label class="form-check-label text-center mt-lg-2"
                        for="respuesta{{ $questionItem->id }}_{{ $i }}">
                        {{ $agreement7Answers[$i] }}
                    </label>
                </div>
            @endfor
        @endif
        @if ($answerType == 'seguridad5')
            @for ($i = 0; $i < count($seguridad5Answers); $i++)
                <div class=" form-check d-flex flex-lg-column mt-lg-0 mt-1">
                    <input name="respuestas[{{ $questionItem->id }}]" class="justify-center me-lg-0 me-4 d-flex"
                        type="radio" id="respuesta{{ $questionItem->id }}_{{ $i }}"
                        value="{{ $i + 1 }}">
                    <label class="form-check-label text-center mt-lg-2"
                        for="respuesta{{ $questionItem->id }}_{{ $i }}">
                        {{ $seguridad5Answers[$i] }}
                    </label>
                </div>
            @endfor
        @endif
        @if ($answerType == 'frecuencia5')
            @for ($i = 0; $i < count($frecuencia5Answers); $i++)
                <div class="form-check d-flex flex-lg-column mt-lg-0 mt-1">
                    <input name="respuestas[{{ $questionItem->id }}]" class="justify-center me-lg-0 me-4 d-flex"
                        type="radio" id="respuesta{{ $questionItem->id }}_{{ $i }}"
                        value="{{ $i + 1 }}">
                    <label class="form-check-label text-center mt-lg-2"
                        for="respuesta{{ $questionItem->id }}_{{ $i }}">
                        {{ $frecuencia5Answers[$i] }}
                    </label>
                </div>
            @endfor
        @endif
    </div>
</div>

<script>
    var labels = document.querySelectorAll('.form-check-label');
    labels.forEach(function(label) {
        label.addEventListener('click', function() {
            var inputId = label.getAttribute('for');
            var input = document.getElementById(inputId);
            input.checked = true;
        });
    });
</script>
