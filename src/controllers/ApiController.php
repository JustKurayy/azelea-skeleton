<?php
namespace Azelea\Core;

class ApiController extends Controller {
    public function v1intro() {
        $json_data = [
            "test" => "testingss"
        ];
        return $this->json(json_encode($json_data));
    }
}
