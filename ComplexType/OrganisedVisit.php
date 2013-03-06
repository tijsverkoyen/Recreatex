<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class OrganisedVisit extends ComplexTypeAbstract
{
    const CLASS_NAME = 'OrganisedVisit';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var integer
     */
    protected $No;

    /**
     * @var string
     */
    protected $StartDate;

    /**
     * @var string
     */
    protected $EndDate;

    /**
     * @var string
     */
    protected $Comment;

    /**
     * @var float
     */
    protected $PeriodReservationAmount;

    /**
     * @var float
     */
    protected $ArticlesAmount;

    /**
     * @var float
     */
    protected $CancelCostAmount;

    /**
     * @var float
     */
    protected $CancelReturnAmount;

    /**
     * @var float
     */
    protected $TotalAmount;

    /**
     * @var boolean
     */
    protected $Cancelled;

    /**
     * @var boolean
     */
    protected $Closed;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var Person
     */
    protected $Person;

    /**
     * @var ArrayOfOrganisedVisitPeriodReservation
     */
    protected $PeriodReservations;

    /**
     * @var ArrayOfOrganisedVisitArticle
     */
    protected $Articles;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return OrganisedVisit
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
     * @param  integer[optional] $no
     * @return OrganisedVisit
     */
    public function setNo($no)
    {
        $this->No = $no;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNo()
    {
        return $this->No;
    }

    /**
     * @param  string[optional] $startDate
     * @return OrganisedVisit
     */
    public function setStartDate($startDate)
    {
        $this->StartDate = $startDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param  string[optional] $endDate
     * @return OrganisedVisit
     */
    public function setEndDate($endDate)
    {
        $this->EndDate = $endDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param  string[optional] $comment
     * @return OrganisedVisit
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param  float[optional] $periodReservationAmount
     * @return OrganisedVisit
     */
    public function setPeriodReservationAmount($periodReservationAmount)
    {
        $this->PeriodReservationAmount = $periodReservationAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getPeriodReservationAmount()
    {
        return $this->PeriodReservationAmount;
    }

    /**
     * @param  float[optional] $articlesAmount
     * @return OrganisedVisit
     */
    public function setArticlesAmount($articlesAmount)
    {
        $this->ArticlesAmount = $articlesAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getArticlesAmount()
    {
        return $this->ArticlesAmount;
    }

    /**
     * @param  float[optional] $cancelCostAmount
     * @return OrganisedVisit
     */
    public function setCancelCostAmount($cancelCostAmount)
    {
        $this->CancelCostAmount = $cancelCostAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getCancelCostAmount()
    {
        return $this->CancelCostAmount;
    }

    /**
     * @param  float[optional] $cancelReturnAmount
     * @return OrganisedVisit
     */
    public function setCancelReturnAmount($cancelReturnAmount)
    {
        $this->CancelReturnAmount = $cancelReturnAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getCancelReturnAmount()
    {
        return $this->CancelReturnAmount;
    }

    /**
     * @param  float[optional] $totalAmount
     * @return OrganisedVisit
     */
    public function setTotalAmount($totalAmount)
    {
        $this->TotalAmount = $totalAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->TotalAmount;
    }

    /**
     * @param  boolean[optional] $cancelled
     * @return OrganisedVisit
     */
    public function setCancelled($cancelled)
    {
        $this->Cancelled = $cancelled;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getCancelled()
    {
        return $this->Cancelled;
    }

    /**
     * @param  boolean[optional] $closed
     * @return OrganisedVisit
     */
    public function setClosed($closed)
    {
        $this->Closed = $closed;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getClosed()
    {
        return $this->Closed;
    }

    /**
     * @param  SimpleType\Guid[optional] $personId
     * @return OrganisedVisit
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
     * @param  Person[optional] $person
     * @return OrganisedVisit
     */
    public function setPerson(Person $person = null)
    {
        $this->Person = $person;

        return $this;
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->Person;
    }

    /**
     * @param  ArrayOfOrganisedVisitPeriodReservation[optional] $periodReservations
     * @return OrganisedVisit
     */
    public function setPeriodReservations(ArrayOfOrganisedVisitPeriodReservation $periodReservations = null)
    {
        $this->PeriodReservations = $periodReservations;

        return $this;
    }

    /**
     * @return ArrayOfOrganisedVisitPeriodReservation
     */
    public function getPeriodReservations()
    {
        return $this->PeriodReservations;
    }

    /**
     * @param  ArrayOfOrganisedVisitArticle[optional] $articles
     * @return OrganisedVisit
     */
    public function setArticles(ArrayOfOrganisedVisitArticle $articles = null)
    {
        $this->Articles = $articles;

        return $this;
    }

    /**
     * @return ArrayOfOrganisedVisitArticle
     */
    public function getArticles()
    {
        return $this->Articles;
    }
}
