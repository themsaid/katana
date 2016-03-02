# Katana static site & blog generator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/themsaid/katana.svg?style=flat-square)](https://packagist.org/packages/themsaid/katana)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.txt)
[![Total Downloads](https://img.shields.io/packagist/dt/themsaid/katana.svg?style=flat-square)](https://packagist.org/packages/themsaid/katana)

PHP static site & blog generator with markdown support. Using Laravel's [Blade](https://laravel.com/docs/5.2/blade).

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

You'll need to point your web server to this directory as the root directory of the website.

## Blade templating engine

Blade is a simple yet powerful templating engine built for laravel, you need to [check Blade's documentation](https://laravel.com/docs/5.2/blade) if you're not already familiar with it.

## Documentation

The complete Katana documentation can be found here: http://themsaid.github.io/katana/