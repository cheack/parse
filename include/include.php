<?php
define("PATH_ROOT", realpath(__DIR__."/../")."/");
define("PATH_INCLUDE", PATH_ROOT . "include/");
define("PATH_LOGS", PATH_ROOT . "logs/");
define("PATH_CLASSES", PATH_INCLUDE . "classes/");
define("PATH_CONFIG", PATH_ROOT . "config/");
define("PATH_TEMPLATES", PATH_INCLUDE . "templates/");

require_once PATH_INCLUDE . "autoload.php";
require_once PATH_ROOT . "/vendor/autoload.php";
