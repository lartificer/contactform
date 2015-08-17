# Lartificer Contactform

This package is a part of the Lartificer project, based on the Laravel Framework. Only to use inside a Laravel project.

## Installation
The whole project is available as [Packagist Lartificer project](https://packagist.org/packages/lartificer/contactform) to use with Composer.

To use the contactform package in your Laravel project, first add it to the `composer.json` in your project's root directory. To enable custom install paths for your Composer packages, it is also necessary to require the [composer-custom-directory-installer](https://github.com/mnsami/composer-custom-directory-installer).

### Composer
```javascript
"require": {
		"laravel/framework": "5.0.*",
		...
        "mnsami/composer-custom-directory-installer": "1.0.*",
        "lartificer/contactform": "dev-master"
	},
```
Make the PSR-0 namespace fit, and add the `extra` option to install the package at a custom path.
```javascript
    "autoload": {
        ...
	    "psr-0": {
		  "Lartificer\\Contactform": "path/to/lartificer/contactform/src/"
		}
	},
    "extra": {
      "installer-paths": {
        "./path/to/lartificer/contactform/": ["lartificer/contactform"]
      }
    }
```

### App.php
Now you have to register the NewsServiceProvider in your `app.php` file.

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
This is a multi-language package. To fit your language needs, add the corresponding language files in the `src/lang` directory. The files in this directory determine the displayed texts and the routes.
The `ContactformController` offers you the posibility to enable the multilanguage feature in its `__construct()` method.


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
