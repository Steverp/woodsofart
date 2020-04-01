<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Invoice
{

    /**
     * @MongoDB\Id(strategy="UUID")
     */
    protected $id;

     /**
     * @MongoDB\EmbedOne(targetDocument="Sale")
     */
    protected $saleId;

     /**
     * @MongoDB\EmbedOne(targetDocument="Play")
     */
    protected $playId;

     /**
     * @MongoDB\Field(type="float")
     */
    protected $totalPrice;

     /**
     * @MongoDB\Field(type="int")
     */
    protected $quantity;

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
     * Get the value of saleId
     */ 
    public function getSaleId()
    {
        return $this->saleId;
    }

    /**
     * Set the value of saleId
     *
     * @return  self
     */ 
    public function setSaleId($saleId)
    {
        $this->saleId = $saleId;

        return $this;
    }

    /**
     * Get the value of playId
     */ 
    public function getPlayId()
    {
        return $this->playId;
    }

    /**
     * Set the value of playId
     *
     * @return  self
     */ 
    public function setPlayId($playId)
    {
        $this->playId = $playId;

        return $this;
    }

    /**
     * Get the value of totalPrice
     */ 
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set the value of totalPrice
     *
     * @return  self
     */ 
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
}
