<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Sale
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
     * @MongoDB\Field(type=" int")
     */
    protected $totalValue;

     /**
     * @MongoDB\Field(type=" int")
     */
    protected $totalItems;

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
     * Get the value of totalValue
     */ 
    public function getTotalValue()
    {
        return $this->totalValue;
    }

    /**
     * Set the value of totalValue
     *
     * @return  self
     */ 
    public function setTotalValue($totalValue)
    {
        $this->totalValue = $totalValue;

        return $this;
    }

    /**
     * Get the value of totalItems
     */ 
    public function getTotalItems()
    {
        return $this->totalItems;
    }

    /**
     * Set the value of totalItems
     *
     * @return  self
     */ 
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;

        return $this;
    }
}
