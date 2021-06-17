<select class="form-control single-select" name="subsubcategory_id" id="subsubcategory_id" >
    @if (isset($product->subcategory_id))
      @if (!empty($subsubcategories))
        @foreach ($subsubcategories as $subsubcategory)
          <option value="{{ $subsubcategory->id }}" {{ $subsubcategory->id==$product->subsubcategory_id?'selected':'' }}>
            {{ $subsubcategory->subsubcategory_name_en }} /  {{ $subsubcategory->subsubcategory_name_en }}
          </option>
        @endforeach
      @endif
    @else
      @if (!empty($categorywithSubSubcategory))
        @foreach ($categorywithSubSubcategory->subsubcategories as $subsubcategory)
          <option value="{{ $subsubcategory->id }}">
            {{ $subsubcategory->subsubcategory_name_en }} /  {{ $subsubcategory->subsubcategory_name_bn }}
          </option>
        @endforeach
      @endif
    @endif
</select>

