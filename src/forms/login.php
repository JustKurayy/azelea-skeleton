<?php

class LoginForm extends Forms {
    public function __construct() {
        $form = [
            "testlabel" => [
                "type" => "label",
                "name" => "test",
                "classes" => "",
            ],
            "testinput" => [
                "type" => "text",
                "name" => "test",
                "classes" => "",
            ],
        ];

        $this->generateFields($form);
    }
}
