<?php

class LoginForm extends Forms {
    public function __construct() {
        $form = [
            "testinput" => [
                "type" => "text",
                "name" => "test",
                "classes" => "form-control",
                "options" => [
                    "label" => true,
                    "wrapped" => true, //needs to be implemented. wraps the field in a div
                    "required" => true,
                ],
            ],
            "submitbtn" => [
                "type" => "submit",
                "name" => "Enter",
                "classes" => "btn border",
            ],
        ];

        $this->generateFields($form);
    }
}
