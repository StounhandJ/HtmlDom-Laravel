HtmlDom-Laravel
=======

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

