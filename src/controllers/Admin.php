<?php
namespace Azelea\Core;
use Azelea\Core\Standard\Controller;

class AdminController extends Controller {
    public function admin(array $args) {
        echo $args[0];
        $this->render("admin.php");
    }
}
