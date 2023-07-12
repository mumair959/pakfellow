<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PakFellow</title>

    @include('web-components.stylings')
</head>
<body>

<!--[if lt IE 7]>
<p class="browsehappy">We are Extreamly sorry, But the browser you are using is probably from when civilization started. Which is way behind to view this site properly. Please update to a modern browser, At least a real browser. </p>
<![endif]-->

@include('web-components.header')

@yield('content')

@include('web-components.footer')

@include('web-components.scriptings')

</body>
</html>
