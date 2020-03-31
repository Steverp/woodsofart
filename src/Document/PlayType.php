<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class PlayType
{

    /**
     * @MongoDB\Id(strategy="UUID")
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $playName;


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
     * Get the value of playName
     */ 
    public function getPlayName()
    {
        return $this->playName;
    }

    /**
     * Set the value of playName
     *
     * @return  self
     */ 
    public function setPlayName($playName)
    {
        $this->playName = $playName;

        return $this;
    }
}
