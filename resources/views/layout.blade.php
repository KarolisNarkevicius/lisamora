<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lisamora</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">


</head>
<body class="@yield('body-class')">

@include('nav')
@include('flags')
@include('slider')
@yield('content')

        @include('modals')

        <!-- Scripts -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script>
    $(document).ready(function () {
        $('.slider').slider({full_width: true});
        $('.scrollspy').scrollSpy();
        $('.carousel').carousel();
        @if(isset($saunaType))
        $('.nav-@lang('general.nav-'.$saunaType)').click();
        @endif

         $('.modal-trigger').leanModal();
        $(".button-collapse").sideNav();
    });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82058331-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>