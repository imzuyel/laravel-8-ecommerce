<select class="form-control single-select" name="subcategory_id" id="subcategory_id">
    @if (isset($product->category_id))
    @if (!empty($subcategories))
    @foreach ($subcategories as $subcategory)
    <option value="{{ $subcategory->id }}" {{ $subcategory->id==$product->subcategory_id?'selected':'' }}>
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
