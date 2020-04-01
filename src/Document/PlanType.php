<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class PlanType
{

    /**
     * @MongoDB\Id(strategy="UUID")
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $planName;

     /**
     * @MongoDB\Field(type="string")
     */
    protected $description;

     /**
     * @MongoDB\Field(type="float")
     */
    protected $value;

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
     * Get the value of planName
     */ 
    public function getPlanName()
    {
        return $this->planName;
    }

    /**
     * Set the value of planName
     *
     * @return  self
     */ 
    public function setPlanName($planName)
    {
        $this->planName = $planName;

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
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
