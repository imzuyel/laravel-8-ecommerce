<select class="form-control single-select" name="subcategory_id1" id="subcategory_id1" required>
    @if (isset($subsubcategory->category_id))
      @if (!empty($subcategories))
        @foreach ($subcategories as $subcategory)
          <option value="{{ $subcategory->id }}" {{ $subcategory->id==$subsubcategory->subcategory_id?'selected':'' }}>
            {{ $subcategory->subcategory_name_en }} / {{ $subcategory->subcategory_name_bn }}
          </option>
        @endforeach
      @endif
    @else
      @if (!empty($categorywithSubcategory))
        @foreach ($categorywithSubcategory->subcategories as $subcategory)
          <option value="{{ $subcategory->id }}">
            {{ $subcategory->subcategory_name_en }} / {{ $subcategory->subcategory_name_bn }}
          </option>
        @endforeach
      @endif
    @endif
  </select>

