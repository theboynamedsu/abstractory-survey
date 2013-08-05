<?php

/**
 * FormElement
 *
 * @author Suhmayah Banda <suhmayah.banda@digitallifesciences.co.uk>
 */
abstract class FormInput extends FormElement {

    /**
     * The field name of the input element
     *
     * @var string
     */
    protected $name;

    /**
     * Non mandatory attributes for the input element
     *
     * @var array
     */
    protected $attributes;

    public function __construct($name, array $attributes = null) {
        $this->init();

        $this->name = $name;
        if (!is_null($attributes)) {
            $this->attributes = $attributes;
        }
    }

    private function init() {
        $this->attributes = array();
    }

    public function setAttributes(array $attributes) {
        $this->attributes = $attributes;
    }

    public function setAttribute($key, $value) {
        $this->attributes[$key] = $value;
    }
    
}

