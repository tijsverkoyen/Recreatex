<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureEvent extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureEvent';

    /**
     * @var AdministrativeCost
     */
    protected $AdministrativeCost;

    /**
     * @var integer
     */
    protected $AvailableSeats;

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var CultureActivity
     */
    protected $CultureActivity;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var string
     */
    protected $From;

    /**
     * @var Hall
     */
    protected $Hall;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var Picture
     */
    protected $Image;

    /**
     * @var string
     */
    protected $ImageUri;

    /**
     * @var IncassoCost
     */
    protected $IncassoCost;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var ArrayOfCultureEventPrice
     */
    protected $Prices;

    /**
     * @var ReservationCost
     */
    protected $ReservationCost;

    /**
     * @var string
     */
    protected $SalesFrom;

    /**
     * @var string
     */
    protected $SalesUntil;

    /**
     * @var SimpleType\CultureEventStatus
     */
    protected $Status;

    /**
     * @var string
     */
    protected $Until;

    /**
     * @var ArrayOfCultureEventOption
     */
    protected $Options;

    /**
     * @var CultureEventCategory
     */
    protected $CultureEventCategory;

    /**
     * @var boolean
     */
    protected $UseReservationCost;

    /**
     * @param  AdministrativeCost[optional] $administrativeCost
     * @return CultureEvent
     */
    public function setAdministrativeCost(AdministrativeCost $administrativeCost = null)
    {
        $this->AdministrativeCost = $administrativeCost;

        return $this;
    }

    /**
     * @return AdministrativeCost
     */
    public function getAdministrativeCost()
    {
        return $this->AdministrativeCost;
    }

    /**
     * @param  integer[optional] $availableSeats
     * @return CultureEvent
     */
    public function setAvailableSeats($availableSeats)
    {
        $this->AvailableSeats = $availableSeats;

        return $this;
    }

    /**
     * @return integer
     */
    public function getAvailableSeats()
    {
        return $this->AvailableSeats;
    }

    /**
     * @param  string[optional] $code
     * @return CultureEvent
     */
    public function setCode($code)
    {
        $this->Code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  CultureActivity[optional] $cultureActivity
     * @return CultureEvent
     */
    public function setCultureActivity(CultureActivity $cultureActivity = null)
    {
        $this->CultureActivity = $cultureActivity;

        return $this;
    }

    /**
     * @return CultureActivity
     */
    public function getCultureActivity()
    {
        return $this->CultureActivity;
    }

    /**
     * @param  string[optional] $description
     * @return CultureEvent
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  string[optional] $from
     * @return CultureEvent
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  Hall[optional] $hall
     * @return CultureEvent
     */
    public function setHall(Hall $hall = null)
    {
        $this->Hall = $hall;

        return $this;
    }

    /**
     * @return Hall
     */
    public function getHall()
    {
        return $this->Hall;
    }

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return CultureEvent
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  Picture[optional] $image
     * @return CultureEvent
     */
    public function setImage(Picture $image = null)
    {
        $this->Image = $image;

        return $this;
    }

    /**
     * @return Picture
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param  string[optional] $imageUri
     * @return CultureEvent
     */
    public function setImageUri($imageUri)
    {
        $this->ImageUri = $imageUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageUri()
    {
        return $this->ImageUri;
    }

    /**
     * @param  IncassoCost[optional] $incassoCost
     * @return CultureEvent
     */
    public function setIncassoCost(IncassoCost $incassoCost = null)
    {
        $this->IncassoCost = $incassoCost;

        return $this;
    }

    /**
     * @return IncassoCost
     */
    public function getIncassoCost()
    {
        return $this->IncassoCost;
    }

    /**
     * @param  string[optional] $name
     * @return CultureEvent
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  ArrayOfCultureEventPrice[optional] $prices
     * @return CultureEvent
     */
    public function setPrices(ArrayOfCultureEventPrice $prices = null)
    {
        $this->Prices = $prices;

        return $this;
    }

    /**
     * @return ArrayOfCultureEventPrice
     */
    public function getPrices()
    {
        return $this->Prices;
    }

    /**
     * @param  ReservationCost[optional] $reservationCost
     * @return CultureEvent
     */
    public function setReservationCost(ReservationCost $reservationCost = null)
    {
        $this->ReservationCost = $reservationCost;

        return $this;
    }

    /**
     * @return ReservationCost
     */
    public function getReservationCost()
    {
        return $this->ReservationCost;
    }

    /**
     * @param  string[optional] $salesFrom
     * @return CultureEvent
     */
    public function setSalesFrom($salesFrom)
    {
        $this->SalesFrom = $salesFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalesFrom()
    {
        return $this->SalesFrom;
    }

    /**
     * @param  string[optional] $salesUntil
     * @return CultureEvent
     */
    public function setSalesUntil($salesUntil)
    {
        $this->SalesUntil = $salesUntil;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalesUntil()
    {
        return $this->SalesUntil;
    }

    /**
     * @param  SimpleType\CultureEventStatus[optional] $status
     * @return CultureEvent
     */
    public function setStatus(SimpleType\CultureEventStatus $status = null)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * @return SimpleType\CultureEventStatus
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param  string[optional] $until
     * @return CultureEvent
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string
     */
    public function getUntil()
    {
        return $this->Until;
    }

    /**
     * @param  ArrayOfCultureEventOption[optional] $options
     * @return CultureEvent
     */
    public function setOptions(ArrayOfCultureEventOption $options = null)
    {
        $this->Options = $options;

        return $this;
    }

    /**
     * @return ArrayOfCultureEventOption
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param  CultureEventCategory[optional] $cultureEventCategory
     * @return CultureEvent
     */
    public function setCultureEventCategory(CultureEventCategory $cultureEventCategory = null)
    {
        $this->CultureEventCategory = $cultureEventCategory;

        return $this;
    }

    /**
     * @return CultureEventCategory
     */
    public function getCultureEventCategory()
    {
        return $this->CultureEventCategory;
    }

    /**
     * @param  boolean[optional] $useReservationCost
     * @return CultureEvent
     */
    public function setUseReservationCost($useReservationCost)
    {
        $this->UseReservationCost = $useReservationCost;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getUseReservationCost()
    {
        return $this->UseReservationCost;
    }
}
