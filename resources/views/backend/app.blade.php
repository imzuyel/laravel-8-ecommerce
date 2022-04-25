<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>{{ config('app.name') }} | @yield('title')</title>
  <!--favicon-->
  <link rel="icon" href="/{{ setting('site_favicon') }}" type="image/png" />

  <!--plugins-->
  <link href="{{ asset('backend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
  <!-- loader-->
  @FilemanagerScript
  <link href="{{ asset('backend/assets/css/pace.min.css') }}" rel="stylesheet" />
  <script src="{{ asset('backend/assets/js/pace.min.js') }}"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}" />
  <!-- Icons CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/icons.css') }}" />
  <!-- App CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/app.css') }}" />
  <link rel="stylesheet" href="{{ asset('backend/assets/css/dark-theme.css') }}" />

  <link rel="stylesheet" href="{{ asset('backend/assets/css/custome.css') }}" />
  @stack('css')

</head>


<body>
  <div class="wrapper">
    <img class="centered" src="/images/ajax-loader.gif" alt="" srcset="">

    <!--sidebar-wrapper-->
    @include('backend.partials.sidebar')
    <!--end sidebar-wrapper-->

    <!--header-->
    @include('backend.partials.header')
    <!--end header-->

    <!--page-wrapper-->
    <div class="page-wrapper">
      <div class="page-content-wrapper">
        <div class="page-content">
          @yield('content')
        </div>
      </div>
    </div>
    <!--end page-wrapper-->

    <!--start overlay-->
    <div class="overlay toggle-btn-mobile"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    <!--footer -->
    @include('backend.partials.footer')
    <!-- end footer -->
  </div>

  <!--start switcher-->
  @include('backend.partials.switcher')
  <!--end switcher-->

  <!-- JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
  <!--plugins-->
  <script src="{{ asset('backend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('backend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/script.js') }}"></script>

  <!-- App JS -->
  <script src="{{ asset('backend/assets/js/app.js') }}"></script>
  <script type="text/javascript">
    window.onload = function() {
      if (sessionStorage.getItem('darktheme')) {
        $("html").addClass("dark-theme");
        $('#darkmode').prop('checked', true);
        $('#lightmode').prop('checked', false);
      }
    }

  </script>
  @include('auth.toast')

  {{-- Delete --}}
  <script src="{{ asset('backend/assets/js/sweetalert2.all.min.js') }}"></script>

  <script>
    $('.delete-confirm').click(function(event) {
      var form = $(this).closest("form");
      event.preventDefault();
      Swal.fire({
        title: 'Are you sure?'
        , text: "You won't be able to revert this!"
        , icon: 'warning'
        , showCancelButton: true
        , confirmButtonColor: '#3085d6'
        , cancelButtonColor: '#d33'
        , confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      })
    });

  </script>
  <script>
    $('.delete-confirm1').click(function(event) {
      event.preventDefault();
      const url = $(this).attr('href');
      Swal.fire({
        title: 'Are you sure?'
        , text: "You won't be able to revert this!"
        , icon: 'warning'
        , showCancelButton: true
        , confirmButtonColor: '#3085d6'
        , cancelButtonColor: '#d33'
        , confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = url;
        }
      })
    });

  </script>
  {{-- multiple image preview --}}
  <script>
    $(document).ready(function() {
      if (window.File && window.FileList && window.FileReader) {
        $("#files").on("change", function(e) {
          var files = e.target.files
            , filesLength = files.length;
          for (var i = 0; i < filesLength; i++) {
            var f = files[i]
            var fileReader = new FileReader();
            fileReader.onload = (function(e) {
              var file = e.target;
              $("<span class=\"pip\">" +
                "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                "<br/><span class=\"remove\">Remove</span>" +
                "</span>").insertAfter("#files");
              $(".remove").click(function() {
                $(this).parent(".pip").remove();
              });

              // Old code here
              /*$("<img></img>", {
                class: "imageThumb",
                src: e.target.result,
                title: file.name + " | Click to remove"
              }).insertAfter("#files").click(function(){$(this).remove();});*/

            });
            fileReader.readAsDataURL(f);
          }
        });
      } else {
        alert("Your browser doesn't support to File API")
      }
    });

  </script>
  @stack('js')
</body>

</html>
