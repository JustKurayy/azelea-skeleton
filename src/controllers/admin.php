<?php

class AdminController extends Controller {
    public function admin(array $args) {
        echo $args[0];
        $this->render("admin.php");
    }
}
