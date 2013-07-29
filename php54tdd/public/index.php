<?php

require_once '../vendor/SplClassLoader.php';

$classLoader = new SplClassLoader('SON', '../vendor');
$classLoader->register();

$classLoader = new SplClassLoader('App', '../');
$classLoader->register();

require_once '../App/Init.php';
$bootstrap = new \App\Init;