<select class="form-control single-select" name="subcategory_id" id="subcategory_id" required>
    @if (isset($subsubcategory->category_id))
      @if (!empty($subcategories))
        @foreach ($subcategories as $subcategory)
          <option value="{{ $subcategory->id }}" {{ $subcategory->id==$subsubcategory->subcategory_id?'selected':'' }}>
            {{ $subcategory->subcategory_name_en }}
          </option>
        @endforeach
      @endif
    @else
      @if (!empty($categorywithSubcategory))
        @foreach ($categorywithSubcategory->subcategories as $subcategory)
          <option value="{{ $subcategory->id }}">
            {{ $subcategory->subcategory_name_en }}
          </option>
        @endforeach
      @endif
    @endif
  </select>

