<?php
namespace Azelea\Core;

class HomeController extends Controller {
    public function home($db = new DatabaseManager) {
        $person = new Persons();
        $form = $this->buildForm(LoginForm::class, $person);

        if ($form->submitForm()) {
            $person->setLastname($form->getData("lname"));
            $person->setFirstname($form->getData("fname"));
            $person->setAddress($form->getData("address"));
            $person->setCity($form->getData("city"));
            $db->parse($person);
            $db->push();
            return $this->routeToUri("/");
        }

        $personf = $db->getModel(Persons::class, 28);
        Core::dd($personf);

        return $this->render("home.php", [
            'form' => $form,
        ]);
    }
}
