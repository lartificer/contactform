# Lartificer Contactform

This package is a part of the Lartificer project, based on the Laravel Framework. Only to use inside a Laravel project.

## Installation
The whole project is available as [Packagist Lartificer project](https://packagist.org/packages/lartificer/contactform) to use with Composer.

To use the contactform package in your Laravel project, first add it to the `composer.json` in your project's root directory.

### Composer
```javascript
"require": {
		"laravel/framework": "5.1.*",
		...
        "lartificer/contactform": "dev-master"
	},
```
Run composer update afterwards.

### app.php
Now you have to register the ContactformServiceProvider in your `app.php` file.

```php
'providers' => [

		...
		
		/*
		 * Lartificer
		 */ 
		'Lartificer\Contactform\ContactformServiceProvider',

	],
```

## How to use?
* Install the package
* Create a link on your website to /{{ trans("contactform::links.contact") }}
* Publish the config file and adjust your email address:
```php artisan vendor:publish --provider="vendor/lartificer/contactform/src/Lartificer/Contactform/ContactformServiceProvider.php" --tag="config"```
* You are done, enjoy your contact form :)

## License
Copyright (c) 2015 Sopamo GmbH

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
