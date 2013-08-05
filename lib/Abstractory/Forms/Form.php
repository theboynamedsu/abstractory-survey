<?php

class Form extends FormComponent {

    const METHOD_POST = "post";
    const METHOD_GET = "get";

    const TARGET_SELF = '_self';
    const TARGET_BLANK = '_blank';
    const TARGET_PARENT = '_parent';
    const TARGET_TOP = '_top';

    const ENCTYPE_DEFAULT = 'application/x-www-form-urlencoded';
    const ENCTYPE_MULTIPART_FORM_DATA = 'multipart/form-data';
    const ENCTYPE_PLAIN_TEXT = 'text/plain';

    protected $attributes;

    protected $components;

    protected $method;
    protected $action;
    protected $enctype;
    protected $target;
    protected $name;

    public function __construct() {
        $this->init();
    }

    protected function init() {
        $this->attributes = array();
        $this->components = array();
    }

    public function setMethod($method) {
        switch (strtoupper($method)) {
            case self::METHOD_GET:
            case self::METHOD_POST:
                $this->method = strtoupper($method);
                break;
            default:
                throw new Exception("Method not supported");
                break;
        }
    }

    public function getMethod() {
        if (is_null($this->method)) {
            return self::METHOD_POST;
        }
        return $this->method;
    }

    public function setAction($action) {
        $this->action = $action;
    }

    public function getAction() {
        return $this->action;
    }

    public function setEnctype($enctype) {
        switch (strtolower($enctype)) {
            self::ENCTYPE_DEFAULT:
            self::ENCTYPE_MULTIPART_FORM_DATA:
            self::PLAIN_TEXT:
                $this->enctype = $enctype;
                break;
            default:
                $throw new Exception("Encoding type not supported");
                break;
        }
    }

    public function add($index, FormElement $element) {
	$this->components[$index] = $element;
    }

    public function remove($index) {
        if (array_key_exists($index, $this->components)) {
            unset($this->components[$index]);
        }
    }

    public function render() {
        $form = sprintf("<form %s>", $this->renderAttributes());
        $form.= $this->renderComponents();
        $form.= "</form>";
        return $form;
    }

}

