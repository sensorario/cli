# Cli

![cli.png](cli.png)

## Usage

```php
require_once __DIR__ . "/../vendor/autoload.php";
Cli::println(Cli::red, "red");
```

## Senza composer

    .
    ├── README.md
    └── example
        └── colori.php
    
    1 directory, 2 files

## Con composer

    .
    ├── README.md
    ├── composer.json
    ├── example
    │   └── colori.php
    ├── src
    │   └── Cli.php
    └── vendor
        ├── autoload.php
        └── composer
            ├── ClassLoader.php
            ├── LICENSE
            ├── autoload_classmap.php
            ├── autoload_namespaces.php
            ├── autoload_psr4.php
            ├── autoload_real.php
            ├── autoload_static.php
            └── installed.json

    4 directories, 13 files

## Packagist

Su [packagist](https://packagist.org/packages/sensorario/colors) …

## Install

    composer require sensorario/colors ^1.0
