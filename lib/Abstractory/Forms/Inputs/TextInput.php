<?php

require_once "../Components/FormComponent.php";
require_once "../Components/FormElement.php";
require_once "../Components/FormInput.php";
require_once "InputElement.php";

/**
 * TextInput
 *
 * @author Suhmayah Banda <suhmayah.banda@digitallifesciences.co.uk>
 */
class TextInput extends InputElement {

    protected function getType() {
        return "text";
    }
    
}

$input = new TextInput("test", array('value' => 'something', 'onclick' => 'alert("hello world")'));
echo $input->render();