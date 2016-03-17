<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$siteDescription}}">

    <title>{{$siteName}} @yield('pageTitle')</title>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="@url('style.css')">
</head>

<body>

<nav>
    <div class="wrapper">
        <strong>{{$siteName}}</strong>

        <ul>
            <li><a href="@url('/')">Home</a></li>
            <li><a href="@url('blog')">Blog</a></li>
            <li><a href="@url('about')">About</a></li>
            <li><a href="https://github.com/themsaid/katana">Github</a></li>
            <li><a href="https://themsaid.github.io/katana">Docs</a></li>
        </ul>
    </div>
</nav>

<div class="wrapper m-t-30">
    @yield('body')
</div>

<div class="clearfix"></div>

</body>
</html>