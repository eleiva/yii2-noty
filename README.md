README
======
Wrapper of jquery plugin noty ( http://ned.im/noty/ )

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist eleiva/yii2-noty "*"
```

or add

```
"eleiva/yii2-noty": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
  use eleiva\noty\Noty;
   echo Noty::widget([
        'text' => 'Hi! Looks good!',
        'type' => Noty::INFORMATION,
        'useAnimateCss' => true,
        'clientOptions' => [
            'timeout' => 5000,
            'layout' => 'top',
            'dismissQueue' => true,
            'theme' => 'relax',
            'animation' => [
                'open' => 'animated bounceInLeft',
                'close' => 'animated bounceOutLeft',
                'easing' => 'swing',
                'speed' => 500
            ]
        ]
    ]);
```
Or simply 
```php
   use eleiva\noty\Noty;
   echo Noty::widget([
                'text'=> 'Helloo WORLD',
              ]);
```

