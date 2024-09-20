<?php

class Routes extends Router {
    public function __construct() {
        $this->addRoute("GET", "/", "HomeController::home", null);
        $this->addRoute("GET", "/admin", "AdminController::admin", null);
    }
}