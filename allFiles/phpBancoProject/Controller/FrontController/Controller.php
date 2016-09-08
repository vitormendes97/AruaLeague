<?php

$action = $_POST["acao"];
$entity = $_POST["one"];
$reflectionClass = null;

function entity_actions($entity,$action) {
    if ($entity == "cargo") {

        include '../Action/CargoAction.php';
        $reflectionClass = new ReflectionClass('CargoAction');

        $teste = get_class_methods(new CargoAction());

        foreach ($teste as $key) {

            if ($action == $key) {
                $reflectionClass->getMethod("$key")->invoke(new CargoAction());
            }
        }
    }
}




entity_actions($entity, $action);