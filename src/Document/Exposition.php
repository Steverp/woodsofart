<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Exposition
{

    /**
     * @MongoDB\Id(strategy="UUID")
     */
    protected $id;

     /**
     * @MongoDB\EmbedOne(targetDocument="Exposition")
     */
    protected $expositionTypeId;

     /**
     * @MongoDB\Field(type="string")
     */
    protected $description;

     /**
     * @MongoDB\Field(type="date")
     */
    protected $expositionDate;

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
     * Get the value of expositionTypeId
     */ 
    public function getExpositionTypeId()
    {
        return $this->expositionTypeId;
    }

    /**
     * Set the value of expositionTypeId
     *
     * @return  self
     */ 
    public function setExpositionTypeId($expositionTypeId)
    {
        $this->expositionTypeId = $expositionTypeId;

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

    /**
     * Get the value of expositionDate
     */ 
    public function getExpositionDate()
    {
        return $this->expositionDate;
    }

    /**
     * Set the value of expositionDate
     *
     * @return  self
     */ 
    public function setExpositionDate($expositionDate)
    {
        $this->expositionDate = $expositionDate;

        return $this;
    }
}
