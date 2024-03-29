<?php

define("ROOT", dirname(__DIR__));// Корень
define("WWW", __DIR__); // папка с фалом index (public)
define("CORE",  dirname(__DIR__) . "vendor/core"); // Ядро(папка vendor)
define("APP", dirname(__DIR__) . "/app"); //mvs
define("STORAGE", dirname(__DIR__) . "/storage"); //storage


require_once "../vendor/autoload.php";
require_once  "../vendor/include/global_functions.php";
require_once "route.php";
require_once "../conf.php";

use vendor\core\Router;
Router::dispatch(Router::deleteGetParam($_SERVER['REQUEST_URI']));

