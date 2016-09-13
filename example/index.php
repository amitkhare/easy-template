<?php
require (__DIR__.'/../vendor/autoload.php');
use AmitKhare\EasyTemplate;

$template = new EasyTemplate(__DIR__.'/resources/',[]);


echo $template->view('template/public/header',['title'=>'EasyTemplate']);
echo $template->view('views/pages/home');
echo $template->view('template/public/footer');