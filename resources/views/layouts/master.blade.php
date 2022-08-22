
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="Reprise Responsive web template, Bootstrap Web Templates" />
    <title>Reprise Personal | @yield('title') :: W3layouts</title>
    <link href="//fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap"
          rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    @include('partials.javascript')
</body>

</html>
