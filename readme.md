# Yii2 Image Optimizer
A Yii2 helper for optimizing image using [webllc/image-optimizer](https://github.com/webllc/image-optimizer) library.

## Installation
1. Run the [Composer](http://getcomposer.org/download/) command to install the latest version:

```bash
composer require webllc/yii2-image-optimizer
```

## Usage
From here, you could either use it directly like this:

```php
\webllc\yii2\ImageOptimizer\Optimizer::optimize('@app/image.png');
```

And like this:
```php
use \webllc\yii2\ImageOptimizer\Optimizer;

Optimizer::optimize('@app/image.png');
```

Or, define it as Yii2 component. At your config:

```php
'components' => [
  'optimizer' => [
    'class' => 'webllc\yii2\ImageOptimizer\Optimizer',
  ],
],
```

Then use it like this:
```php
Yii::$app->optimizer::optimize('@app/image.png');
```