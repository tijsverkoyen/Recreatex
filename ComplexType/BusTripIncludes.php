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
     * @var boolean
     */
    protected $Contacts;

    /**
     * @var boolean
     */
    protected $Persons;

    /**
     * @var boolean
     */
    protected $ConfirmedBustrips;

    /**
     * @var boolean
     */
    protected $UnConfirmedBustrips;

    /**
     * @var boolean
     */
    protected $ExtraLugage;

    /**
     * @var boolean
     */
    protected $NoExtraLugage;

    /**
     * @var boolean
     */
    protected $Pictures;

    /**
     * @param  boolean[optional] $contacts
     * @return BusTripIncludes
     */
    public function setContacts($contacts)
    {
        $this->Contacts = $contacts;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getContacts()
    {
        return $this->Contacts;
    }

    /**
     * @param  boolean[optional] $persons
     * @return BusTripIncludes
     */
    public function setPersons($persons)
    {
        $this->Persons = $persons;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPersons()
    {
        return $this->Persons;
    }

    /**
     * @param  boolean[optional] $confirmedBustrips
     * @return BusTripIncludes
     */
    public function setConfirmedBustrips($confirmedBustrips)
    {
        $this->ConfirmedBustrips = $confirmedBustrips;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getConfirmedBustrips()
    {
        return $this->ConfirmedBustrips;
    }

    /**
     * @param  boolean[optional] $unConfirmedBustrips
     * @return BusTripIncludes
     */
    public function setUnConfirmedBustrips($unConfirmedBustrips)
    {
        $this->UnConfirmedBustrips = $unConfirmedBustrips;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getUnConfirmedBustrips()
    {
        return $this->UnConfirmedBustrips;
    }

    /**
     * @param  boolean[optional] $extraLugage
     * @return BusTripIncludes
     */
    public function setExtraLugage($extraLugage)
    {
        $this->ExtraLugage = $extraLugage;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getExtraLugage()
    {
        return $this->ExtraLugage;
    }

    /**
     * @param  boolean[optional] $noExtraLugage
     * @return BusTripIncludes
     */
    public function setNoExtraLugage($noExtraLugage)
    {
        $this->NoExtraLugage = $noExtraLugage;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getNoExtraLugage()
    {
        return $this->NoExtraLugage;
    }

    /**
     * @param  boolean[optional] $pictures
     * @return BusTripIncludes
     */
    public function setPictures($pictures)
    {
        $this->Pictures = $pictures;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPictures()
    {
        return $this->Pictures;
    }
}
