<?php

require_once "lib/Abstractory/Forms/Components/FormComponent.php";
require_once "lib/Abstractory/Forms/Form.php";
require_once "lib/Abstractory/Forms/Components/FormInput.php";
require_once "lib/Abstractory/Forms/Components/Label.php";

require_once "lib/Abstractory/Forms/Inputs/InputElement.php";

$inputTypes = array(
    'Button',
    'Checkbox',
    'FileInput',
    'HiddenInput',
    'PasswordInput',
    'RadioButton',
    'SelectList',
    'SubmitButton',
    'TextArea',
    'TextInput',
);

foreach ($inputTypes as $inputType) {
    require_once "lib/Abstractory/Forms/Inputs/$inputType.php";
}

$form = new Form();
$form->setMethod(Form::METHOD_POST);
$form->setAction("http://www.aboynamedsu.net");

$label = new Label("Test 1", "test1");
$form->add('test1Label', $label);

$textInput = new TextInput("test1", array('id' => "test1"));
$form->add("test1", $textInput);

$submit = new SubmitButton("saveTest", array('value' => 'Save Test'));
$form->add("saveButton", $submit);

echo $form->render();

