<div>
    <div class="d-flex mb-5">
        @for ($i = 0; $i < count($agreement7Answers); $i++)
            <div style="max-width: 180px"class="form-check d-flex flex-column align-items-center mw-75">
                <input class="justify-center" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label text-center" for="flexRadioDefault1">
                    {{ $agreement7Answers[$i] }}
                </label>
            </div>
        @endfor
    </div>
</div>
