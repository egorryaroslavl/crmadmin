# Admin Area

Installation
------------

```
composer require egorryaroslavl/crm
```

Then add ServiceProviders

```
  'providers' => [
    // ...
    Egorryaroslavl\Crm\CrmServiceProvider::class,
    Collective\Html\HtmlServiceProvider::class,
    Intervention\Image\ImageServiceProvider::class,
    Barryvdh\Elfinder\ElfinderServiceProvider::class,
    // ...
  ],
```
and aliases

```
  'aliases' => [
    // ...
      'Form' => Collective\Html\FormFacade::class,
      'Html' => Collective\Html\HtmlFacade::class,
      'Image' => Intervention\Image\Facades\Image::class,
    // ...
  ],
```
and run
```
php artisan vendor:publish
```

 