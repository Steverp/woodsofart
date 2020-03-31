<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class ExpositionType
{

    /**
     * @MongoDB\Id(strategy="UUID")
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $expositionName;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $description;

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
     * Get the value of expositionName
     */ 
    public function getExpositionName()
    {
        return $this->expositionName;
    }

    /**
     * Set the value of expositionName
     *
     * @return  self
     */ 
    public function setExpositionName($expositionName)
    {
        $this->expositionName = $expositionName;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
