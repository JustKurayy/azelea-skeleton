<?php
namespace Azelea\Core;

use Azelea\Core\Database\DatabaseManager;
use Azelea\Core\Standard\Controller;

class SecurityController extends Controller {
    public function login(DatabaseManager $db) {
        $form = $this->buildForm(LoginForm::class);

        if ($form->submitForm()) {
            $this->addFlash('hi', 'success');
            $db->login(Users::class, $form);
            return $this->routeToUri("/");
        }

        $this->render("login.loom.php", [
            "form" => $form,
        ]);
    }
}
