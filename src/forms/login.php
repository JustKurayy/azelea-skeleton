<?php
namespace Azelea\Core;

class LoginForm extends Forms {
    public function init() {
        $form = [
            "testinput" => [
                "type" => "text",
                "name" => "lname",
                "classes" => "mb-2",
                "options" => [
                    "label" => true,
                    "wrapped" => "hello", //needs to be implemented. wraps the field in a div
                    "required" => true,
                ],
            ],
            "fnameinput" => [
                "type" => "text",
                "name" => "fname",
                "classes" => "mb-2",
                "options" => [
                    
                ]
            ],
            "addressinput" => [
                "type" => "text",
                "name" => "address",
                "classes" => "mb-2",
                "options" => [
                    "label" => true,
                    "required" => true
                ]
            ],
            "cityinput" => [
                "type" => "text",
                "name" => "city",
                "classes" => "mb-2",
                "options" => [
                    "label" => true,
                    "required" => true
                ]
            ],
            "submitbtn" => [
                "type" => "submit",
                "name" => "Enter",
                "classes" => "btn border-fuchsia-50 mt-2",
            ],
        ];

        $this->generateFields($form);
    }
}
