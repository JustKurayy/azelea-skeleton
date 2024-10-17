<?php
namespace Azelea\Core;
use Azelea\Core\Standard\Router;

class Routes extends Router {
    public function __construct() {
        $this->addRoute("GET", "/", "HomeController::home");
        $this->addRoute("GET", "/login", "SecurityController::login", ["lmao"]);
        $this->addRoute("GET", "/api/v1", "ApiController::v1intro");
        $this->load();
    }
}
