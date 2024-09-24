<?php

class TestForm extends Forms {
    public function init() {
        $form = [
            "testinput" => [
                "type" => "text",
                "name" => "TestField",
                "classes" => "form-control",
            ],
            "submitbtn" => [
                "type" => "submit",
                "name" => "Test",
                "classes" => "btn border",
            ],
        ];

        $this->generateFields($form);
    }
}
