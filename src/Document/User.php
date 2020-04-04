<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * @MongoDB\Document
 */
class User implements UserInterface
{

    /**
     * @MongoDB\Id(strategy="UUID")
     */
    protected $id;

     /**
     * @MongoDB\EmbedOne(targetDocument="Profile")
     */
    protected $profileId;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $username;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $password;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $phone;

     /**
     * @MongoDB\Field(type="string")
     */
    protected $address;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $pseudonym;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $presentation;

      /**
     * @MongoDB\EmbedOne(targetDocument="City")
     */
    protected $cityId;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $email;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $age;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $zipCode;

    /**
     * User constructor.
    * @param $username
    */
    public function __construct($username)
    {
    $this->username = $username;
    }

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
     * Get profileId
     *
     * @return  object_id $profileId
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * Set profileId
     *
     * @param  object_id $profileId
     * @return $this
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;

        return $this;
    }


    /**
     * Get username
     *
     * @return string $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }


    /**
     * Get phone
     *
     * @return int $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phone
     *
     * @param int $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get pseudonym
     *
     * @return string $pseudonym
     */
    public function getPseudonym()
    {
        return $this->pseudonym;
    }

    /**
     * Set pseudonym
     *
     * @param string $pseudonym
     * @return $this
     */
    public function setPseudonym($pseudonym)
    {
        $this->pseudonym = $pseudonym;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string $presentation
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     * @return $this
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get cityId
     *
     * @return string $cityId
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Set cityId
     *
     * @param string $cityId
     * @return $this
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;

        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get age
     *
     * @return int $age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set age
     *
     * @param int $age
     * @return $this
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string $zipCode
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return $this
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * @return string|null
    */
    public function getSalt()
    {
    return null;
    }


    /**
     * @return string|null
    */
    public function getPassword()
    {
    return $this->password;
    }

    /**
     * @param $password
    */
    public function setPassword($password)
    {
    $this->password = $password;
    }

     /**
     * @return array|string[]
    */
    public function getRoles()
    {
    return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }
}
