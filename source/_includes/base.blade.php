<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$siteDescription}}">

    <title>{{$siteName}} @yield('pageTitle')</title>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,900' rel='stylesheet' type='text/css'>
</head>

<body>

<nav>
    <div class="wrapper">
        <strong>{{$siteName}}</strong>

        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="https://github.com/themsaid/katana">Github</a></li>
            <li><a href="https://themsaid.github.io/katana">Docs</a></li>
        </ul>
    </div>
</nav>

@yield('body')

<div class="clearfix"></div>

</body>
</html>