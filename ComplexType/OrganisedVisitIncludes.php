<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class OrganisedVisitIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'OrganisedVisitIncludes';

    /**

     * @var boolean
     */
    protected $Cancelled;

    /**

     * @var boolean
     */
    protected $PersonDetails;

    /**

     * @var boolean
     */
    protected $PeriodReservations;

    /**

     * @var boolean
     */
    protected $Articles;

    /**
     * @param  boolean[optional]      $cancelled
     * @return OrganisedVisitIncludes
     */
    public function setCancelled($cancelled)
    {
        $this->Cancelled = $cancelled;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getCancelled()
    {
        return $this->Cancelled;
    }

    /**
     * @param  boolean[optional]      $personDetails
     * @return OrganisedVisitIncludes
     */
    public function setPersonDetails($personDetails)
    {
        $this->PersonDetails = $personDetails;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPersonDetails()
    {
        return $this->PersonDetails;
    }

    /**
     * @param  boolean[optional]      $periodReservations
     * @return OrganisedVisitIncludes
     */
    public function setPeriodReservations($periodReservations)
    {
        $this->PeriodReservations = $periodReservations;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPeriodReservations()
    {
        return $this->PeriodReservations;
    }

    /**
     * @param  boolean[optional]      $articles
     * @return OrganisedVisitIncludes
     */
    public function setArticles($articles)
    {
        $this->Articles = $articles;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getArticles()
    {
        return $this->Articles;
    }
}
