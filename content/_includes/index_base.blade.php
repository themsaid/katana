<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Katana - PHP static site & blog generator</title>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="@url('libs.css')">
    <link rel="stylesheet" href="@url('prism.css')">
    <link rel="stylesheet" href="@url('style.css')">

</head>
<body>
<div class="container header">
    <div class="row">
        <div class="col-md-6">
            <div class="hero">
                <h1 class="katana">Katana</h1>
                <p class="h2">PHP static site & blog generator with markdown support.</p>
                <p class="h3">Using the power of laravel's Blade templating engine.</p>
            </div>
        </div>
        <div class="col-md-6 text-right">
            <div class="features">
                <span class="m-t-40">Markdown support &#9733;</span>
                <span>Blazing fast installation &#9733;&#9733;</span>
                <span>Pretty URLs out of the box &#9733;&#9733;&#9733;</span>
                <span>Easy blog posts pagination &#9733;&#9733;&#9733;&#9733;</span>
            </div>
        </div>
    </div>
</div>

<div class="container m-t-40">
    <div class="row">
        <div class="col-md-3">
            <img src="@url('snippet_2.png')">
        </div>

        <div class="col-md-3">
            <img src="@url('snippet_1.png')">
        </div>

        <div class="col-md-3">
            <img src="@url('snippet_3.png')">
        </div>

        <div class="col-md-3">
            <img src="@url('snippet_4.png')">
        </div>
    </div>
</div>

<div class="m-t-40 boom">
    <div class="container text-center text-white">
        <h3>INSTALL NOW</h3>

        <code>composer create-project themsaid/katana your-site-name</code>

        <p>
            <a href="https://github.com/themsaid/katana">Check Github project</a>
            || continue reading the docs &#9759;
        </p>
    </div>
</div>

<div class="container docs m-t-40">
    <div class="col-md-8 col-md-offset-2 docs-content">
        @yield('body')
    </div>
</div>

<div class="m-t-40 boom footer">
    <div class="container text-center">
        <p>
            Katana is created by <a href="https://twitter.com/themsaid">Mohamed Said</a>
            <br>
            Licensed under MIT License.
            <br>
            <br>
            <a href="https://github.com/themsaid/katana">Github project</a> ·
            <a href="https://github.com/themsaid/katana/issues">Issues</a>
        </p>
    </div>
</div>

<script src="/prism.js"></script>
</body>
</html>