<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Play
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
     * @MongoDB\EmbedOne(targetDocument="Editorial")
     */
    protected $editorialId;

     /**
     * @MongoDB\EmbedOne(targetDocument="PlayType")
     */
    protected $playTypeId;

     /**
     * @MongoDB\Field(type="string")
     */
    protected $title;

     /**
     * @MongoDB\Field(type="string")
     */
    protected $description;

      /**
     * @MongoDB\Field(type="float")
     */
    protected $price;

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
     * Get the value of editorialId
     */ 
    public function getEditorialId()
    {
        return $this->editorialId;
    }

    /**
     * Set the value of editorialId
     *
     * @return  self
     */ 
    public function setEditorialId($editorialId)
    {
        $this->editorialId = $editorialId;

        return $this;
    }

    /**
     * Set the value of playTypeId
     *
     * @return  self
     */ 
    public function setPlayTypeId($playTypeId)
    {
        $this->playTypeId = $playTypeId;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

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
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
