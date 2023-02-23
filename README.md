# People Data Application

## What is People Data?

People Data is a evalution application. created by [Keerthivasan Sekar](https://github.com/keerthivasansekar)

The application was built on top of [Codeigniter 4](https://codeigniter.com/).

## Installation & updates

- Navigate to your webroot eg:- `C:\xampp\htdocs\`.
- Clone the repository with `git clone https://github.com/keerthivasansekar/people-data.git`.
- Navigate to `people-data`.
- `composer update` whenever there is a new release of the application.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL.


## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
