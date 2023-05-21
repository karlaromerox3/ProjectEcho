 @csrf
 <div class="col d-grid gap-4 items-center">
     <div class="col-sm-4">
         <label for="ModelInput" class="form-label">Modelo Educativo</label>
         <select name="model" id="ModelInput" class="w-5 form-select">
             @for ($i = 0; $i < count($models); $i++)
                 <option value="{{ $models[$i] }}" @selected(old('model') === $models[$i])>{{ $models[$i] }}</option>
             @endfor
         </select>
     </div>
     <div class="col-sm-4">
         <label for="AgeInput" class="form-label">Edad</label>
         {{-- input:text.form-control#AgeInput --}}
         <input type="number" name="age" id="AgeInput" class="form-control" value="{{ old('age') }}">
     </div>
     <div class="col-sm-4">
         <label for="GenderInput" class="form-label">Género</label>
         <select name="gender" id="GenderInput" class="form-select">
             @for ($i = 0; $i < count($genders); $i++)
                 <option value="{{ $i }}" @selected(old('gender') == $i)>{{ $genders[$i] }}</option>
             @endfor
         </select>
     </div>
     <div class="col-sm-4">
         <label for="GradDateInput" class="form-label">¿Cuándo te graduas?</label>
         <select name="graduation" id="GradDateInput" class="form-select">
             @for ($i = 0; $i < count($graduationTimes); $i++)
                 <option value="{{ $graduationTimes[$i] }}" @selected(old('graduation') === $graduationTimes[$i])>{{ $graduationTimes[$i] }}
                 </option>
             @endfor
         </select>
     </div>
 </div>
 <div class="row-sm-12 text-end my-4">
     <button classtype="submit" class="btn btn-primary">Guardar</button>
 </div>
