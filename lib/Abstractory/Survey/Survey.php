<?php

/**
 * Survey
 *
 * @author Suhmayah Banda <suhmayah.banda@digitallifesciences.co.uk>
 */
class Survey {
    
    /**
     *
     * @var int
     */
    protected $id;
    
    /**
     *
     * @var string 
     */
    protected $name;
    
    /**
     *
     * @var string 
     */
    protected $description;
    
    /**
     *
     * @var int 
     */
    protected $dateCreated;
    
    /**
     *
     * @var int 
     */
    protected $lastUpdated;
    
    /**
     *
     * @var string 
     */
    protected $status;
    
    /**
     *
     * @var array
     */
    protected $pages;

    /**
     * 
     */
    public function __construct() {
        $this->init();
    }
    
    protected function init() {
        $this->pages = array();
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }
    
    public function getDescription() {
        return $this->description;
    }
    
    public function addPage($page) {
        $this->pages[] = $page;
    }
    
    public function removePage($pageNumber) {
        if (array_key_exists($pageNumber, $this->pages)) {
            unset($this->pages[$pageNumber]);
            $this->pages = array_values($this->pages);
        }
    }
    
}

