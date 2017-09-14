<!DOCTYPE html>
<html lang="en">

<head>

    @include('Front.partial.Head.head')

</head>

<body>
@include('Front.partial.Navigation.navigation')

<!-- Header -->
@include('Front.partial.Header.header')
<!-- Main Content -->
  @section('main-content')
      @show

<!-- Footer -->
@include('Front.partial.Footer.footer')

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('/front/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/front/vendor/popper/popper.min.js') }}"></script>
<script src="{{ asset('/front/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('/front/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('/front/js/stylish-portfolio.js') }}"></script>

</body>

</html>
