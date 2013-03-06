<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureWaitingListReservationSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureWaitingListReservationSearchCriteria';

    /**
     * @var SimpleTypeGuid
     */
    protected $CultureWaitingListReservationId;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var SimpleTypeGuid
     */
    protected $CultureEventId;

    /**
     * @var string
     */
    protected $From;

    /**
     * @var string
     */
    protected $Until;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var CultureWaitingListReservationIncludes
     */
    protected $Includes;

    /**
     * @param  SimpleType\Guid[optional]                   $cultureWaitingListReservationId
     * @return CultureWaitingListReservationSearchCriteria
     */
    public function setCultureWaitingListReservationId(SimpleType\Guid $cultureWaitingListReservationId = null)
    {
        $this->CultureWaitingListReservationId = $cultureWaitingListReservationId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getCultureWaitingListReservationId()
    {
        return $this->CultureWaitingListReservationId;
    }

    /**
     * @param  SimpleType\Guid[optional]                   $personId
     * @return CultureWaitingListReservationSearchCriteria
     */
    public function setPersonId(SimpleType\Guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  SimpleType\Guid[optional]                   $cultureEventId
     * @return CultureWaitingListReservationSearchCriteria
     */
    public function setCultureEventId(SimpleType\Guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param  string[optional]                            $from
     * @return CultureWaitingListReservationSearchCriteria
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
     * @param  string[optional]                            $until
     * @return CultureWaitingListReservationSearchCriteria
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
     * @param  PagingCriteria[optional]                    $paging
     * @return CultureWaitingListReservationSearchCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria
     */
    public function getPaging()
    {
        return $this->Paging;
    }

    /**
     * @param  CultureWaitingListReservationIncludes[optional] $includes
     * @return CultureWaitingListReservationSearchCriteria
     */
    public function setIncludes(CultureWaitingListReservationIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return CultureWaitingListReservationIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }
}
