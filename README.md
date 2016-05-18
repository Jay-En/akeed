# akeed

This is a boiler plate for Slim 3 that includes Twig, Flash messages, Monolog, forrest and Swagger.

## Create your project:

    $ composer create-project -n -s dev jnbruno/akeed my-app

## Key directories

* `module`: application files
* `app/templates`: Twig template files
* `cache/twig`: Twig's Autocreated cache files
* `log`: Log files
* `vendor`: Composer dependencies

## Key files

* `index.php`: Entry point to application
* `document.php`: swagger ui documentation of application
* `config/settings.php`: Configuration
* `config/dependencies.php`: Services for Pimple
* `config/middleware.php`: Application middleware
* `config/routes.php`: All application routes are here
