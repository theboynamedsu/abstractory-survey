<?php

/**
 * Question
 *
 * @author Suhmayah Banda <suhmayah.banda@digitallifesciences.co.uk>
 */
class Question {
    
    /**
     *
     * @var int
     */
    protected $id;
    
    /**
     *
     * @var string
     */
    protected $reference;
    
    /**
     *
     * @var string
     */
    protected $displayText;
    
    /**
     *
     * @var int
     */
    protected $type;
    
    /**
     *
     * @var array
     */
    protected $attributes;

    public function __construct() {
        $this->init();
    }
    
    protected function init() {
        $this->attributes = array();
    }

}

