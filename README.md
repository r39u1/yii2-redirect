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
            \r39u1\redirect\source\RedirectSourceInterface::class => [
                'class' => \r39u1\redirect\source\CsvRedirectSource::class,
                'csvPath' => '@app/redirect/redirect.csv',
            ]
        ],
    ],
```

...

```
    'modules' => [
        'redirect' => [
            'class' => \r39u1\redirect\Module::class,
        ],
    ],
```

...

```
    'bootstrap' => [
        'redirect',
    ],
```