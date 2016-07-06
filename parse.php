<?php
include __DIR__ . "/include/include.php";

//$parser = new Parser("http://obzona.ru/", ".logo");
$parser = new Parser("http://obzona.ru/", ".table .container .grid-6");
$parser->parse();
