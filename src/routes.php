<?php
namespace Azelea\Core;

class Routes extends Router {
    public function __construct() {
        $this->addRoute("GET", "/", "HomeController::home");
        $this->addRoute("GET", "/admin", "AdminController::admin", ['hi', 'l']);
        $this->addRoute("GET", "/api/v1", "ApiController::v1intro");
    }
}
