<select class="form-control single-select" name="subsubcategory_id" id="subsubcategory_id" >
    @if (isset($product->subcategory_id))
      @if (!empty($subsubcategories))
        @foreach ($subsubcategories as $subcategory)
          <option value="{{ $subcategory->id }}" {{ $subcategory->id==$product->subsubcategory_id?'selected':'' }}>
            {{ $subcategory->subsubcategory_name_en }}
          </option>
        @endforeach
      @endif
    @else
      @if (!empty($categorywithSubSubcategory))
        @foreach ($categorywithSubSubcategory->subsubcategories as $subsubcategory)
          <option value="{{ $subsubcategory->id }}">
            {{ $subsubcategory->subsubcategory_name_en }}
          </option>
        @endforeach
      @endif
    @endif
</select>

