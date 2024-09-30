<?php
namespace Azelea\Core;

session_start();

require dirname(__DIR__) . "/vendor/autoload.php";

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__), ".env.local");
$dotenv->load();

foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(realpath(dirname(__DIR__).'/src/controllers'))) as $filename) {
    if (str_contains($filename, ".php")) {
        include $filename;
    }
}

foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(realpath(dirname(__DIR__).'/src/forms'))) as $filename) {
    if (str_contains($filename, ".php")) {
        include $filename;
    }
}

foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(realpath(dirname(__DIR__).'/src/models'))) as $filename) {
    if (str_contains($filename, ".php")) {
        include $filename;
    }
}

include "../src/routes.php";
$routes = new Routes(); 
