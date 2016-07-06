<?php

function autoload($name)
{
    $file = str_replace("\\", "/", PATH_CLASSES . "$name.php");

    if (file_exists($file)) {
        include_once $file;
        return true;
    } else {
        return false;
    }
}

spl_autoload_register("autoload");
