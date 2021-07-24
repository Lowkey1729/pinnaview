<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600;700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">


    <style>
    body {
        font-family: 'Helvetica';
    }
    </style>
</head>

<body class=" bg-gray-200 text-black  antialiased">
    <div id="app">
        <!-- <landing-page></landing-page> -->
        <router-view></router-view>

    <div>

</body>

</html>

<script src="/js/app.js"></script>
