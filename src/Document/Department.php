<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Department
{

    /**
     * @MongoDB\Id(strategy="UUID")
     */
    protected $id;

     /**
     * @MongoDB\Field(type="string")
     */
    protected $departmentName;
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
     * Get departmentName
     *
     * @return string $departmentName
     */
    public function getDepartmentName()
    {
        return $this->departmentName;
    }

    /**
     * Set departmentName
     *
     * @param string $departmentName
     * @return $this
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;

        return $this;
    }

     /**
     * Get daneCode
     *
     * @return string $daneCode
     */
    public function getDaneCode()
    {
        return $this->daneCode;
    }

    /**
     * Set daneCode
     *
     * @param string $daneCode
     * @return $this
     */
    public function setDaneCode($daneCode)
    {
        $this->daneCode = $daneCode;

        return $this;
    }

}
