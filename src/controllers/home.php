<?php

class HomeController extends Controller {
    public function home($dm = new DatabaseManager,) {
        $form = new LoginForm();
        $form2 = new TestForm();

        if ($form->submitForm()) {
            echo "form1!";
            $this->routeToUri("/");
        }

        if ($form2->submitForm()) {
            echo "form2!";
        }

        $this->render("home.php", [
            'form' => $form,
            'form2' => $form2,
        ]);
    }
}
