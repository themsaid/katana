# v1.1.0

> 2016-03-23

1. Included a `$currentViewPath` variable available in all views that holds the path from the file system to the current view being rendered.
1. Included a `$currentUrlPath` as well that hold the current URL path.

# v1.0.0

> 2016-03-17

1. Added support for `.md` files.
1. Fixed the first link in blog posts pagination to point to the main blog page instead of `blog-page/1/`.
1. Added support for multiple environments configurations.
1. Added a `--env=` option in the build command.
1. Removed the `--base_url` option from the build command to be read from the environment configuration file.