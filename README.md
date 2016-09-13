# amitkhare/easy-template

## EasyTemplate is an easy to use minimal PHP templating engine.

## INSTALL
### VIA COMPOSER
```sh
composer require amitkhare/easy-template dev-master
```
### VIA GIT
```sh
git clone https://github.com/amitkhare/easy-template.git
```

## EXAMPLE USAGE

```sh
<?php

// autoload via composer
require __DIR__.'/../vendor/autoload.php';

// OR WITHOUT COMPOSER
// require __DIR__.'/PATH-TO/EasyRouter.php';

use AmitKhare\EasyTemplate;

// Take an instance of EasyTemplate Class.
$template = new EasyTemplate(__DIR__.'/resources/',[]);

// render header
echo $template->view('template/public/header',['title'=>'EasyTemplate']);
// render page 
echo $template->view('views/pages/home');
// render footer
echo $template->view('template/public/footer');
```

## See Example folder for details

