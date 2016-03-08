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
        <div class="toc">
            @markdown
            - [-> Installation](#installation)
            - [-> Directory Structure](#directory-structure)
            - [-> Blade Templates](#blade-templates)
            - [-> Blog Generator](#blog-generator)
            - [-> GitHub Pages](#github-pages)
            - [-> Sample Content](#sample-content)
            @endmarkdown
        </div>

        @markdown
        <a name="installation"></a>
        # Installation

        Installing Katana is fairly easy, first you need to run the composer create-project command:

        ```bash
        composer create-project themsaid/katana your-site-name
        ````

        Now you have a fresh installation of Katana in the `your-site-name` directory, now you need to build your site
        by running the following commands:

        ```bash
        cd your-site-name

        php katana build
        ```

        The website files will be generated in the `public` directory.

        #### Defining the base URL for the build

        You can define the base URL of your website for the current build by providing a `base_url` console option:

        ```bash
        php katana build --base_url=/awesome-site
        ```

        Doing this will generate URLs like `/awesome-site/about` when using the `@@url()` blade directive.

        <a name="directory-structure"></a>
        # Directory structure

        After running the build command the structure will contain the following files:

        - `content` This is where Katana looks for your site content.
        - `_cache` This is where Blade saves its compiled views.
        - `public` Katana will generate your site static files in this directory.
        - `config.php` This is where your site configurations are.


        #### About the "content" directory structure

        This directory holds your blade views, static assets (JS files, stylsheets, images, etc...), the
        `_blog` directory, and the
        `_includes` directory.

        The
        `_includes` directory is where you place your layouts and base views, Katana will not generate accessible pages for these files.

        The `_blog` directory is where you save your blog posts.

        #### About config.php

        This file contains a list of predefined configuration values Katana needs to be able to generate your website, each configuration option is accompanied by a detailed explanation of what it's for.

        In this file you may also define any custom variables, later you can call these variable in any blade view in your website.

        <a name="blade-templates"></a>
        # Blade Templates

        If you're not already familiar with Blade then here's a description for it from laravel's website:

        > Blade is the simple, yet powerful templating engine provided with Laravel. Unlike other popular PHP templating engines, Blade does not restrict you from using plain PHP code in your views.

        It's recommended that you [read more about Blade](https://laravel.com/docs/5.2/blade).

        #### Markdown in blade

        Katana includes a `@@markdown` directive for Blade, here's how you can use it:

        ```html
        <h2>Regular HTML heading</h2>

        @@markdown
            This is some **Markdown** content.
        @@endmarkdown
        ```

        #### Generating URLs

        Katana also includes a `@@url()` directive to generate URLs for pages and assets based on the site's `base_url`:

        ```html
        @('/')                // Outputs '/'

        @('about')            // Outputs '/about'

        @('assets/style.js')  // Outputs '/assets/style.js'
        ```

        <a name="blog-generator"></a>
        # The Blog generator

        Generating a blog with Katana is insanely easy, all you have to do is to create a new file in the
        `/content/_blog/` directory with the following format for the name:

        ```html
        2016-03-03-my-post-slug.blade.php
        ```

        The date at the beginning of the name will help make your posts sorted by date in the filesystem, it'll also be used to generate a unique pretty URL for your post, the generated URL for the above post is:

        ```html
        blog.com/my-post-slug-20160303
        ```

        #### Blog post variables

        A blog post view may look like this:

        ```html
        @@section('post::title', 'Stop Trying To Be Somebody')
        @@section('post::date', 'February 28, 2016')

        @@section('post_body')
            <h2>@@yield('post::title')</h2>
            <small>@@yield('post::date')</small>

            Post content here.
        @@stop
        ```

        Section names starting with `post::` will be added to a global variable called `$blogPosts`,
        this variable will be present in all blade views and it contains an array of post objects.

        You can use this variable to loop over all blog posts:

        ```html
        @@foreach($blogPosts as $blogPost)
            <li>
                <a href="@{{ $blogPost->path }}">
                    @{{ $blogPost->title }} at @{{ $blogPost->date }}
                </a>
            </li>
        @@endforeach
        ```

        The
        `path` attribute is automatically added by Katana, it holds the relative URL to the blog post.

        #### Blog posts pagination

        Katana generates pages to display every chunk of posts, you first need to set the
        `postsPerPage` and
        `postsListView` configuration values in
        `config.php`.

        Go ahead and take a look at the configuration file to know more about what every configuration does.

        Inside the pagination view a `$paginatedBlogPosts` variable exists containing all the posts for display in
        the current page, there's also `$nextPage` and `$previousPage` variables that hold links to the next and previous pages.

        <a name="github-pages"></a>
        # GitHub Pages

        You can use Katana to publish a website over [GitHub Pages](https://pages.github.com/) using subtrees, the idea is to
        deploy the public directory as the `master` branch of your user GitHub pages repository or the `gh-pages` branch of
        your project repository.

        #### Step 1 - Add katana to a branch other than master/gh-pages:

        We're going to call this branch `gh-pages-source`, install Katana on this branch and add content to your installation normally.

        #### Step 2 - Build the website:

        Once your content is ready to be published run the build command:

        ```bash
        php katana build
        ```

        If you're going to publish the website on a GitHub page for a project rather than a user you'll need to define a `base_url`.

        ```bash
        php katana build --base_url=project-repo-name
        ```

        #### Step 3 - Push your source files to the source branch

        ```bash
        git add --all

        git commit -m 'publishing website'

        git push origin gh-pages-source
        ```

        #### Step 3 - Push your public directory to the master/gh-pages branch

        You need to make sure the `public` directory is removed from `.gitignore` first.

        ```bash
        git subtree push --prefix public origin master
        ```

        OR

        ```bash
        git subtree push --prefix public origin gh-pages
        ```

        <a name="sample-content"></a>
        # Sample Content

        After installing Katana you'll find sample content for a website and a blog included, take a look at these files in
        order for you to better understand how Katana compiles different types of files & blog posts.

        @endmarkdown
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