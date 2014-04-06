Spintax string processor for Laravel 4
===============

### Installation
To include this package in your project, require it in your `composer.json` file using
```
"jopacicdev/spintax": "dev-master"
```
Afterwards, include service provider and alias in `app/config/app.php`:
```
'Jopacicdev\Spintax\SpintaxServiceProvider',
```
and
```
'Spintax' => 'Jopacicdev\Spintax\Facades\Spintax',
```
and you're all set!

### Usage
Pass your spintax string as a parameter of `process` method:
```
Spintax::process('{Hi|Hello|Howdy|Hola|Hey} there {Mr|Mrs|Miss} {Smith|Jones}!');
```

### Credits
Original PHP class by Jason Davis - https://www.codedevelopr.com/