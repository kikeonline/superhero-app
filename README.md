## Superhero App

The Superhero App lets you search and view details of all superhero and villains from all universes. This is a PHP Assessment test built with Laravel 8.

You can check this app deployed at: https://superhero-app.kike.work

### Dependencies:

- PHP 7.3+
- Composer
- NPM
- Laravel 8

### Run the app

1. `npm install`
2. `composer install`
3. `npm run dev` or `npm run watch`
4. Include your Superhero API KEY in .env in  the name variable `SUPER_APIKEY`. 
5. `php artisan serve`

### Testing

Run feature and unit testin with the following command:

`php artisan test`

### Running Tests In Parallel

By default, Laravel and PHPUnit execute your tests sequentially within a single process. However, you may greatly reduce the amount of time it takes to run your tests by running tests simultaneously across multiple processes. To get started, include the --parallel option when executing the test Artisan command:

`php artisan test --parallel`
