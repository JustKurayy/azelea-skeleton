<?php

class HomeController extends Controller {
    public function home($db = new DatabaseManager,) {
        $person = new Persons();
        $form = $this->buildForm(LoginForm::class, $person);

        if ($form->submitForm()) {
            $person->setLastname($form->getData("test"));
            $person->setFirstname("J.");
            $person->setAddress("M.2");
            $person->setCity("Chicago");
            $db->parse($person);
            $db->push();
            //$this->routeToUri("/");
        }

        $this->render("home.php", [
            'form' => $form,
        ]);
    }
}
