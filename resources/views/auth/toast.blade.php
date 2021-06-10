@toastr_css
@toastr_js
@toastr_render
<script>
    @if(count($errors) > 0)
        @foreach($errors->all()  as $error)
         toastr.error('{{ $error }}');
        @endforeach
    @endif
</script>
