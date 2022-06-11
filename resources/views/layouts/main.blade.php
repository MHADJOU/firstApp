<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--
        steps for creating a Blade Tempale Layout
        step 1:

    -->
    <title>DemoLaravel - @yield('title')</title>
</head>
<body>

    @yield('heading')

    <hr>

    <ul>
        <li><a href="/">Home page</a></li>
        <li><a href="/about">About us</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>

    @yield('content')
    <!--end  step one-->
    
    <hr>
    <b>(c) 2022 - UGNEWS24</b>

</body>
</html>