<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class UserPlan
{

    /**
     * @MongoDB\Id(strategy="UUID")
     */
    protected $id;

     /**
     * @MongoDB\EmbedOne(targetDocument="User")
     */
    protected $userId;
 
     /**
     * @MongoDB\EmbedOne(targetDocument="PlanType")
     */
    protected $planTypeId;

     /**
     * @MongoDB\Field(type="string")
     */
    protected $planName;

     /**
     * @MongoDB\Field(type="string")
     */
    protected $description;
    
     /**
     * @MongoDB\Field(type="date")
     */
    protected $startingDate;

     /**
     * @MongoDB\Field(type="date")
     */
    protected $terminationDate;
    
     /**
     * @MongoDB\Field(type="date")
     */
    protected $lastPaymentDate;


     /**
     * @MongoDB\Field(type="int")
     */
    protected $paymentType;

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
     * Get the value of userId
     */ 
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */ 
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get the value of planTypeId
     */ 
    public function getPlanTypeId()
    {
        return $this->planTypeId;
    }

    /**
     * Set the value of planTypeId
     *
     * @return  self
     */ 
    public function setPlanTypeId($planTypeId)
    {
        $this->planTypeId = $planTypeId;

        return $this;
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
     * Get the value of startingDate
     */ 
    public function getStartingDate()
    {
        return $this->startingDate;
    }

    /**
     * Set the value of startingDate
     *
     * @return  self
     */ 
    public function setStartingDate($startingDate)
    {
        $this->startingDate = $startingDate;

        return $this;
    }

    /**
     * Get the value of terminationDate
     */ 
    public function getTerminationDate()
    {
        return $this->terminationDate;
    }

    /**
     * Set the value of terminationDate
     *
     * @return  self
     */ 
    public function setTerminationDate($terminationDate)
    {
        $this->terminationDate = $terminationDate;

        return $this;
    }

    /**
     * Get the value of lastPaymentDate
     */ 
    public function getLastPaymentDate()
    {
        return $this->lastPaymentDate;
    }

    /**
     * Set the value of lastPaymentDate
     *
     * @return  self
     */ 
    public function setLastPaymentDate($lastPaymentDate)
    {
        $this->lastPaymentDate = $lastPaymentDate;

        return $this;
    }

    /**
     * Get the value of paymentType
     */ 
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set the value of paymentType
     *
     * @return  self
     */ 
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }
}
