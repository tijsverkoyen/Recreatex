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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var AdministrativeCost|null $AdministrativeCost
     */
    protected $AdministrativeCost;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $AvailableSeats
     */
    protected $AvailableSeats;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Code
     */
    protected $Code;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CultureActivity|null $CultureActivity
     */
    protected $CultureActivity;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $From
     */
    protected $From;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Hall|null $Hall
     */
    protected $Hall;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Picture|null $Image
     */
    protected $Image;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ImageUri
     */
    protected $ImageUri;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var IncassoCost|null $IncassoCost
     */
    protected $IncassoCost;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Name
     */
    protected $Name;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfCultureEventPrice|null $Prices
     */
    protected $Prices;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ReservationCost|null $ReservationCost
     */
    protected $ReservationCost;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $SalesFrom
     */
    protected $SalesFrom;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $SalesUntil
     */
    protected $SalesUntil;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\CultureEventStatus|null $Status
     */
    protected $Status;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Until
     */
    protected $Until;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfCultureEventOption|null $Options
     */
    protected $Options;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var CultureEventCategory|null $CultureEventCategory
     */
    protected $CultureEventCategory;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $UseReservationCost
     */
    protected $UseReservationCost;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $AllowBasReservation
     */
    protected $AllowBasReservation;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $AllowExplicitSeatReservation
     */
    protected $AllowExplicitSeatReservation;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MaxVisitors
     */
    protected $MaxVisitors;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MaxVisitorsWeb
     */
    protected $MaxVisitorsWeb;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $AvailableSitePlaces
     */
    protected $AvailableSitePlaces;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $AvailableTotal
     */
    protected $AvailableTotal;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $BreakFrom
     */
    protected $BreakFrom;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $BreakUntil
     */
    protected $BreakUntil;

    /**
     * @param  AdministrativeCost|null $administrativeCost
     * @return CultureEvent
     */
    public function setAdministrativeCost(AdministrativeCost $administrativeCost = null)
    {
        $this->AdministrativeCost = $administrativeCost;

        return $this;
    }

    /**
     * @return AdministrativeCost|null
     */
    public function getAdministrativeCost()
    {
        return $this->AdministrativeCost;
    }

    /**
     * @param  integer|null $availableSeats
     * @return CultureEvent
     */
    public function setAvailableSeats($availableSeats)
    {
        $this->AvailableSeats = $availableSeats;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getAvailableSeats()
    {
        return $this->AvailableSeats;
    }

    /**
     * @param  string|null  $code
     * @return CultureEvent
     */
    public function setCode($code)
    {
        $this->Code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  CultureActivity|null $cultureActivity
     * @return CultureEvent
     */
    public function setCultureActivity(CultureActivity $cultureActivity = null)
    {
        $this->CultureActivity = $cultureActivity;

        return $this;
    }

    /**
     * @return CultureActivity|null
     */
    public function getCultureActivity()
    {
        return $this->CultureActivity;
    }

    /**
     * @param  string|null  $description
     * @return CultureEvent
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  string|null  $from
     * @return CultureEvent
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  Hall|null    $hall
     * @return CultureEvent
     */
    public function setHall(Hall $hall = null)
    {
        $this->Hall = $hall;

        return $this;
    }

    /**
     * @return Hall|null
     */
    public function getHall()
    {
        return $this->Hall;
    }

    /**
     * @param  SimpleType\guid|null $id
     * @return CultureEvent
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  Picture|null $image
     * @return CultureEvent
     */
    public function setImage(Picture $image = null)
    {
        $this->Image = $image;

        return $this;
    }

    /**
     * @return Picture|null
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param  string|null  $imageUri
     * @return CultureEvent
     */
    public function setImageUri($imageUri)
    {
        $this->ImageUri = $imageUri;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageUri()
    {
        return $this->ImageUri;
    }

    /**
     * @param  IncassoCost|null $incassoCost
     * @return CultureEvent
     */
    public function setIncassoCost(IncassoCost $incassoCost = null)
    {
        $this->IncassoCost = $incassoCost;

        return $this;
    }

    /**
     * @return IncassoCost|null
     */
    public function getIncassoCost()
    {
        return $this->IncassoCost;
    }

    /**
     * @param  string|null  $name
     * @return CultureEvent
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  ArrayOfCultureEventPrice|null $prices
     * @return CultureEvent
     */
    public function setPrices(ArrayOfCultureEventPrice $prices = null)
    {
        $this->Prices = $prices;

        return $this;
    }

    /**
     * @return ArrayOfCultureEventPrice|null
     */
    public function getPrices()
    {
        return $this->Prices;
    }

    /**
     * @param  ReservationCost|null $reservationCost
     * @return CultureEvent
     */
    public function setReservationCost(ReservationCost $reservationCost = null)
    {
        $this->ReservationCost = $reservationCost;

        return $this;
    }

    /**
     * @return ReservationCost|null
     */
    public function getReservationCost()
    {
        return $this->ReservationCost;
    }

    /**
     * @param  string|null  $salesFrom
     * @return CultureEvent
     */
    public function setSalesFrom($salesFrom)
    {
        $this->SalesFrom = $salesFrom;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSalesFrom()
    {
        return $this->SalesFrom;
    }

    /**
     * @param  string|null  $salesUntil
     * @return CultureEvent
     */
    public function setSalesUntil($salesUntil)
    {
        $this->SalesUntil = $salesUntil;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSalesUntil()
    {
        return $this->SalesUntil;
    }

    /**
     * @param  SimpleType\CultureEventStatus|null $status
     * @return CultureEvent
     */
    public function setStatus(SimpleType\CultureEventStatus $status = null)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * @return SimpleType\CultureEventStatus|null
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param  string|null  $until
     * @return CultureEvent
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUntil()
    {
        return $this->Until;
    }

    /**
     * @param  ArrayOfCultureEventOption|null $options
     * @return CultureEvent
     */
    public function setOptions(ArrayOfCultureEventOption $options = null)
    {
        $this->Options = $options;

        return $this;
    }

    /**
     * @return ArrayOfCultureEventOption|null
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param  CultureEventCategory|null $cultureEventCategory
     * @return CultureEvent
     */
    public function setCultureEventCategory(CultureEventCategory $cultureEventCategory = null)
    {
        $this->CultureEventCategory = $cultureEventCategory;

        return $this;
    }

    /**
     * @return CultureEventCategory|null
     */
    public function getCultureEventCategory()
    {
        return $this->CultureEventCategory;
    }

    /**
     * @param  boolean|null $useReservationCost
     * @return CultureEvent
     */
    public function setUseReservationCost($useReservationCost)
    {
        $this->UseReservationCost = $useReservationCost;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getUseReservationCost()
    {
        return $this->UseReservationCost;
    }

    /**
     * @param  boolean|null $allowBasReservation
     * @return CultureEvent
     */
    public function setAllowBasReservation($allowBasReservation)
    {
        $this->AllowBasReservation = $allowBasReservation;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getAllowBasReservation()
    {
        return $this->AllowBasReservation;
    }

    /**
     * @param  boolean|null $allowExplicitSeatReservation
     * @return CultureEvent
     */
    public function setAllowExplicitSeatReservation($allowExplicitSeatReservation)
    {
        $this->AllowExplicitSeatReservation = $allowExplicitSeatReservation;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getAllowExplicitSeatReservation()
    {
        return $this->AllowExplicitSeatReservation;
    }

    /**
     * @param  integer|null $maxVisitors
     * @return CultureEvent
     */
    public function setMaxVisitors($maxVisitors)
    {
        $this->MaxVisitors = $maxVisitors;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMaxVisitors()
    {
        return $this->MaxVisitors;
    }

    /**
     * @param  integer|null $maxVisitorsWeb
     * @return CultureEvent
     */
    public function setMaxVisitorsWeb($maxVisitorsWeb)
    {
        $this->MaxVisitorsWeb = $maxVisitorsWeb;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMaxVisitorsWeb()
    {
        return $this->MaxVisitorsWeb;
    }

    /**
     * @param  integer|null $availableSitePlaces
     * @return CultureEvent
     */
    public function setAvailableSitePlaces($availableSitePlaces)
    {
        $this->AvailableSitePlaces = $availableSitePlaces;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getAvailableSitePlaces()
    {
        return $this->AvailableSitePlaces;
    }

    /**
     * @param  integer|null $availableTotal
     * @return CultureEvent
     */
    public function setAvailableTotal($availableTotal)
    {
        $this->AvailableTotal = $availableTotal;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getAvailableTotal()
    {
        return $this->AvailableTotal;
    }

    /**
     * @param  string|null  $breakFrom
     * @return CultureEvent
     */
    public function setBreakFrom($breakFrom)
    {
        $this->BreakFrom = $breakFrom;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBreakFrom()
    {
        return $this->BreakFrom;
    }

    /**
     * @param  string|null  $breakUntil
     * @return CultureEvent
     */
    public function setBreakUntil($breakUntil)
    {
        $this->BreakUntil = $breakUntil;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBreakUntil()
    {
        return $this->BreakUntil;
    }

}
