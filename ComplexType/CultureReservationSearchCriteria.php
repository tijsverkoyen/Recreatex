<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureReservationSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureReservationSearchCriteria';

    /**
     * @var SimpleType\Guid
     */
    protected $CultureEventId;

    /**
     * @var SimpleType\Guid
     */
    protected $CultureEventReservationId;

    /**
     * @var string
     */
    protected $From;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var SimpleType\Guid
     */
    protected $PersonId;

    /**
     * @var string
     */
    protected $Until;

    /**
     * @param  SimpleType\Guid|null             $cultureEventId
     * @return CultureReservationSearchCriteria
     */
    public function setCultureEventId(SimpleType\Guid $cultureEventId = null)
    {
        $this->CultureEventId = $cultureEventId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getCultureEventId()
    {
        return $this->CultureEventId;
    }

    /**
     * @param  SimpleType\Guid|null             $cultureEventReservationId
     * @return CultureReservationSearchCriteria
     */
    public function setCultureEventReservationId(SimpleType\Guid $cultureEventReservationId = null)
    {
        $this->CultureEventReservationId = $cultureEventReservationId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getCultureEventReservationId()
    {
        return $this->CultureEventReservationId;
    }

    /**
     * @param  string|null                      $from
     * @return CultureReservationSearchCriteria
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
     * @param  PagingCriteria|null              $paging
     * @return CultureReservationSearchCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria|null
     */
    public function getPaging()
    {
        return $this->Paging;
    }

    /**
     * @param  SimpleType\Guid|null             $personId
     * @return CultureReservationSearchCriteria
     */
    public function setPersonId(SimpleType\Guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  string|null                      $until
     * @return CultureReservationSearchCriteria
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
}
