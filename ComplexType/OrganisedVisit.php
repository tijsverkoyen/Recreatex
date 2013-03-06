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
     * @var integer|null $No
     */
    protected $No;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $StartDate
     */
    protected $StartDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $EndDate
     */
    protected $EndDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Comment
     */
    protected $Comment;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $PeriodReservationAmount
     */
    protected $PeriodReservationAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $ArticlesAmount
     */
    protected $ArticlesAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $CancelCostAmount
     */
    protected $CancelCostAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $CancelReturnAmount
     */
    protected $CancelReturnAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $TotalAmount
     */
    protected $TotalAmount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Cancelled
     */
    protected $Cancelled;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Closed
     */
    protected $Closed;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PersonId
     */
    protected $PersonId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Person|null $Person
     */
    protected $Person;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfOrganisedVisitPeriodReservation|null $PeriodReservations
     */
    protected $PeriodReservations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfOrganisedVisitArticle|null $Articles
     */
    protected $Articles;

    /**
     * @param  SimpleType\guid|null $id
     * @return OrganisedVisit
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
     * @param  integer|null   $no
     * @return OrganisedVisit
     */
    public function setNo($no)
    {
        $this->No = $no;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNo()
    {
        return $this->No;
    }

    /**
     * @param  string|null    $startDate
     * @return OrganisedVisit
     */
    public function setStartDate($startDate)
    {
        $this->StartDate = $startDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param  string|null    $endDate
     * @return OrganisedVisit
     */
    public function setEndDate($endDate)
    {
        $this->EndDate = $endDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param  string|null    $comment
     * @return OrganisedVisit
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param  float|null     $periodReservationAmount
     * @return OrganisedVisit
     */
    public function setPeriodReservationAmount($periodReservationAmount)
    {
        $this->PeriodReservationAmount = $periodReservationAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPeriodReservationAmount()
    {
        return $this->PeriodReservationAmount;
    }

    /**
     * @param  float|null     $articlesAmount
     * @return OrganisedVisit
     */
    public function setArticlesAmount($articlesAmount)
    {
        $this->ArticlesAmount = $articlesAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getArticlesAmount()
    {
        return $this->ArticlesAmount;
    }

    /**
     * @param  float|null     $cancelCostAmount
     * @return OrganisedVisit
     */
    public function setCancelCostAmount($cancelCostAmount)
    {
        $this->CancelCostAmount = $cancelCostAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getCancelCostAmount()
    {
        return $this->CancelCostAmount;
    }

    /**
     * @param  float|null     $cancelReturnAmount
     * @return OrganisedVisit
     */
    public function setCancelReturnAmount($cancelReturnAmount)
    {
        $this->CancelReturnAmount = $cancelReturnAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getCancelReturnAmount()
    {
        return $this->CancelReturnAmount;
    }

    /**
     * @param  float|null     $totalAmount
     * @return OrganisedVisit
     */
    public function setTotalAmount($totalAmount)
    {
        $this->TotalAmount = $totalAmount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTotalAmount()
    {
        return $this->TotalAmount;
    }

    /**
     * @param  boolean|null   $cancelled
     * @return OrganisedVisit
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
     * @param  boolean|null   $closed
     * @return OrganisedVisit
     */
    public function setClosed($closed)
    {
        $this->Closed = $closed;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getClosed()
    {
        return $this->Closed;
    }

    /**
     * @param  SimpleType\guid|null $personId
     * @return OrganisedVisit
     */
    public function setPersonId(SimpleType\guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  Person|null    $person
     * @return OrganisedVisit
     */
    public function setPerson(Person $person = null)
    {
        $this->Person = $person;

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getPerson()
    {
        return $this->Person;
    }

    /**
     * @param  ArrayOfOrganisedVisitPeriodReservation|null $periodReservations
     * @return OrganisedVisit
     */
    public function setPeriodReservations(ArrayOfOrganisedVisitPeriodReservation $periodReservations = null)
    {
        $this->PeriodReservations = $periodReservations;

        return $this;
    }

    /**
     * @return ArrayOfOrganisedVisitPeriodReservation|null
     */
    public function getPeriodReservations()
    {
        return $this->PeriodReservations;
    }

    /**
     * @param  ArrayOfOrganisedVisitArticle|null $articles
     * @return OrganisedVisit
     */
    public function setArticles(ArrayOfOrganisedVisitArticle $articles = null)
    {
        $this->Articles = $articles;

        return $this;
    }

    /**
     * @return ArrayOfOrganisedVisitArticle|null
     */
    public function getArticles()
    {
        return $this->Articles;
    }

}
