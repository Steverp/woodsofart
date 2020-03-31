<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class City
{

    /**
     * @MongoDB\Id(strategy="UUID")
     */
    protected $id;

    /**
     * @MongoDB\EmbedOne(targetDocument="Department")
     */
    protected $departmentId;

     /**
     * @MongoDB\Field(type="string")
     */
    protected $cityName;
     /**
     * @MongoDB\Field(type="int")
     */
    protected $daneCode;

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
     * Get departmentId
     *
     * @return  object_id $departmentId
     */
    public function getDepartmentId()
    {
        return $this->departmentId;
    }

    /**
     * Set departmentId
     *
     * @param  object_id $departmentId
     * @return $this
     */
    public function setDepartmentId($departmentId)
    {
        $this->departmentId = $departmentId;

        return $this;
    }

     /**
     * Get cityName
     *
     * @return string $cityName
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Set cityName
     *
     * @param string $cityName
     * @return $this
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;

        return $this;
    }

     /**
     * Get daneCode
     *
     * @return int $daneCode
     */
    public function getDaneCode()
    {
        return $this->daneCode;
    }

    /**
     * Set daneCode
     *
     * @param int $daneCode
     * @return $this
     */
    public function setDaneCode($daneCode)
    {
        $this->daneCode = $daneCode;

        return $this;
    }

}
