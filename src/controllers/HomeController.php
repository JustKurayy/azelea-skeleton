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

        //$personf = $db->getModel(Persons::class, 28);
        //Core::dd($form);

        return $this->render("home.loom.php", [
            'form' => $form,
            'items' => ["1", "2", "2"]
        ]);
    }
}
