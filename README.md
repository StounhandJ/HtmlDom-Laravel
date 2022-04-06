HtmlDom-Laravel
=======
<p align="center">
<a href="https://packagist.org/packages/stounhandj/htmldom-laravel"><img src="https://img.shields.io/packagist/dt/stounhandj/htmldom-laravel" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/stounhandj/htmldom-laravel"><img src="https://img.shields.io/packagist/v/stounhandj/htmldom-laravel" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/stounhandj/htmldom-laravel"><img src="https://img.shields.io/packagist/l/stounhandj/htmldom-laravel" alt="License"></a>
</p>
### A package for Laravel 8, 7, 6, ^5.5 based on Simple HTML Dom Parser

## Installation

```
$ composer require stounhandj/htmldom-laravel
```
Or
```json
{
    "require": {
        "stounhandj/htmldom-laravel": "^1.0.0"
    }
}
```

## Usage

1. Use following:

```php
use StounhandJ\HtmldomLaravel\Htmldom;

$html = new Htmldom('https://www.example.com');

// Find all images 
foreach($html->find('img') as $element) 
       echo $element->src . '<br>';

// Find all links 
foreach($html->find('a') as $element) 
       echo $element->href . '<br>';
```

See the detailed documentation http://simplehtmldom.sourceforge.net/manual.htm

