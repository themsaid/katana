# Katana static site & blog generator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/themsaid/katana.svg?style=flat-square)](https://packagist.org/packages/themsaid/katana)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.txt)
[![Total Downloads](https://img.shields.io/packagist/dt/themsaid/katana-core.svg?style=flat-square)](https://packagist.org/packages/themsaid/katana-core)

PHP static site & blog generator with markdown support.

Using the power of laravel's Blade templating engine.

![Katana static site & blog generator](http://s14.postimg.org/a1gqg2zs1/katana.jpg)

> Katana was inspired by [Jigsaw](https://github.com/tightenco/jigsaw) by [Adam Wathan](http://adamwathan.me/) and the folks at [Tighten](http://tighten.co/).

## Requirements

- PHP 5.5.9+ or newer
- Apache or Nginx server
- [Composer](https://getcomposer.org)

## Installation

To install a fresh Katana installation you need to [install composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx) & run the following command:

```
composer create-project themsaid/katana my-new-site
```

Once the installation is done you may build your website using the command:

```
php katana build
```

Katana is shipped with sample content to help you get started immediately, and after this command runs your site will be generated in the `/public` directory.

## Documentation

The complete Katana documentation can be found here: http://themsaid.github.io/katana/

## Blog generator

Katana is shipped with a static blog generator, all you need to do is create a new `.blade.php` file in the `/content/_blog` directory and Katana
will compile all the posts and present them in a view of your choice.

Blog posts list is paginated based on the configuration options in `config.php`. There's also a `$blogPosts` variable available in all your blade
views that contains an array of posts.

## Blade templating engine

Blade is a simple yet powerful templating engine built for laravel, you need to [check Blade's documentation](https://laravel.com/docs/5.2/blade) if you're not already familiar with it.

## Using with GitHub Pages
You can use Katana to publish a website over GitHub Pages using subtrees, the idea is to deploy the public directory as the master branch of your user GitHub pages repository or the gh-pages branch of your project repository.

You can find the full details in [the documentation](http://themsaid.github.io/katana/).

## Contribution

Contributions are welcomed in this repository https://github.com/themsaid/katana-core where all source files exist.
