<!DOCTYPE html>
<html class="has-aside-left has-aside-expanded">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>

    <!-- FavIcon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="manifest" href="img/favicons/site.webmanifest">


    <!-- CSS -->
    <link href="{{ url(mix('css/app.css')) }}" rel="stylesheet"/>
</head>

<body>
<div id="app">
    <app></app>
</div>
<!-- Javascript -->
<script src="{{ url(mix('js/app.js')) }}"></script>
</body>

</html>
