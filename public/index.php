<?php

require "../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable("../", ".env.local");
$dotenv->load();

foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator(realpath('../src/controllers'))) as $filename) {
    if (str_contains($filename, ".php")) {
        include $filename;
    }
}

include "../src/routes.php";
$routes = new Routes();
