<select class="form-control single-select" name="zilla_id" id="zilla_id" required>

  @if (isset($upzilla->zilla_id))
    @if (!empty($zillas))
      @foreach ($zillas as $zilla)
        <option value="{{ $zilla->id }}" {{ $upzilla->zilla_id==$zilla->id?'selected':'' }}>
          {{ $zilla->name }}
        </option>
      @endforeach
    @endif
  @else
    @if (!empty($divisionwisezilla))
      @foreach ($divisionwisezilla->zillas as $zilla)
        <option value="{{ $zilla->id }}">
          {{ $zilla->name }}
        </option>
      @endforeach
    @endif
  @endif

</select>
