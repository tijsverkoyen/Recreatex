<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class BusTripIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'BusTripIncludes';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Contacts
     */
    protected $Contacts;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Persons
     */
    protected $Persons;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ConfirmedBustrips
     */
    protected $ConfirmedBustrips;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $UnConfirmedBustrips
     */
    protected $UnConfirmedBustrips;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ExtraLugage
     */
    protected $ExtraLugage;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $NoExtraLugage
     */
    protected $NoExtraLugage;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Pictures
     */
    protected $Pictures;

    /**
     * @param  boolean|null    $contacts
     * @return BusTripIncludes
     */
    public function setContacts($contacts)
    {
        $this->Contacts = $contacts;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getContacts()
    {
        return $this->Contacts;
    }

    /**
     * @param  boolean|null    $persons
     * @return BusTripIncludes
     */
    public function setPersons($persons)
    {
        $this->Persons = $persons;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPersons()
    {
        return $this->Persons;
    }

    /**
     * @param  boolean|null    $confirmedBustrips
     * @return BusTripIncludes
     */
    public function setConfirmedBustrips($confirmedBustrips)
    {
        $this->ConfirmedBustrips = $confirmedBustrips;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getConfirmedBustrips()
    {
        return $this->ConfirmedBustrips;
    }

    /**
     * @param  boolean|null    $unConfirmedBustrips
     * @return BusTripIncludes
     */
    public function setUnConfirmedBustrips($unConfirmedBustrips)
    {
        $this->UnConfirmedBustrips = $unConfirmedBustrips;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getUnConfirmedBustrips()
    {
        return $this->UnConfirmedBustrips;
    }

    /**
     * @param  boolean|null    $extraLugage
     * @return BusTripIncludes
     */
    public function setExtraLugage($extraLugage)
    {
        $this->ExtraLugage = $extraLugage;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getExtraLugage()
    {
        return $this->ExtraLugage;
    }

    /**
     * @param  boolean|null    $noExtraLugage
     * @return BusTripIncludes
     */
    public function setNoExtraLugage($noExtraLugage)
    {
        $this->NoExtraLugage = $noExtraLugage;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getNoExtraLugage()
    {
        return $this->NoExtraLugage;
    }

    /**
     * @param  boolean|null    $pictures
     * @return BusTripIncludes
     */
    public function setPictures($pictures)
    {
        $this->Pictures = $pictures;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPictures()
    {
        return $this->Pictures;
    }

}
