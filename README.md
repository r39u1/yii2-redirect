Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist r39u1/yii2-redirect "*"
```

or add

```
"r39u1/yii2-redirect": "*"
```

to the require section of your `composer.json` file.

Configure
---------

frontend:

```
'container' => [
        'definitions' => [
            \app\modules\redirect\source\RedirectSourceInterface::class => [
                'class' => \app\modules\redirect\source\CsvRedirectSource::class,
                'csvPath' => '@app/modules/redirect/redirect.csv',
            ]
        ],
    ],
```

...

```
    'modules' => [
        'redirect' => [
            'class' => \app\modules\redirect\Module::class,
        ],
    ],
```

...

```
    'bootstrap' => [
        'redirect',
    ],
```