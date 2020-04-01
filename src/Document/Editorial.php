<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Editorial
{

    /**
     * @MongoDB\Id(strategy="UUID")
     */
    protected $id;

     /**
     * @MongoDB\Field(type="string")
     */
    protected $editorialName;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of editorialName
     */ 
    public function getEditorialName()
    {
        return $this->editorialName;
    }

    /**
     * Set the value of editorialName
     *
     * @return  self
     */ 
    public function setEditorialName($editorialName)
    {
        $this->editorialName = $editorialName;

        return $this;
    }
}
