<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SubscriptionArticle extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SubscriptionArticle';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $CheckTurns
     */
    protected $CheckTurns;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $NumberOfTurns
     */
    protected $NumberOfTurns;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $MinimumTurns
     */
    protected $MinimumTurns;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $CheckPeriod
     */
    protected $CheckPeriod;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $PeriodStartsOnFirstVisit
     */
    protected $PeriodStartsOnFirstVisit;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Duration|null $PeriodDuration
     */
    protected $PeriodDuration;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsFixedPeriod
     */
    protected $IsFixedPeriod;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Period|null $FixedPeriod
     */
    protected $FixedPeriod;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $CheckMaximumDurationVisit
     */
    protected $CheckMaximumDurationVisit;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $MaximumDurationVisit
     */
    protected $MaximumDurationVisit;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $CheckMinimumDurationNextVisit
     */
    protected $CheckMinimumDurationNextVisit;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $MinimumDurationNextVisit
     */
    protected $MinimumDurationNextVisit;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $CheckTurnsPerPeriod
     */
    protected $CheckTurnsPerPeriod;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $TurnsPerPeriod
     */
    protected $TurnsPerPeriod;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsEticket
     */
    protected $IsEticket;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SubscriptionPeriod|null $SubscriptionPeriod
     */
    protected $SubscriptionPeriod;

    /**
     * @param  boolean|null        $checkTurns
     * @return SubscriptionArticle
     */
    public function setCheckTurns($checkTurns)
    {
        $this->CheckTurns = $checkTurns;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getCheckTurns()
    {
        return $this->CheckTurns;
    }

    /**
     * @param  integer|null        $numberOfTurns
     * @return SubscriptionArticle
     */
    public function setNumberOfTurns($numberOfTurns)
    {
        $this->NumberOfTurns = $numberOfTurns;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumberOfTurns()
    {
        return $this->NumberOfTurns;
    }

    /**
     * @param  integer|null        $minimumTurns
     * @return SubscriptionArticle
     */
    public function setMinimumTurns($minimumTurns)
    {
        $this->MinimumTurns = $minimumTurns;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMinimumTurns()
    {
        return $this->MinimumTurns;
    }

    /**
     * @param  boolean|null        $checkPeriod
     * @return SubscriptionArticle
     */
    public function setCheckPeriod($checkPeriod)
    {
        $this->CheckPeriod = $checkPeriod;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getCheckPeriod()
    {
        return $this->CheckPeriod;
    }

    /**
     * @param  boolean|null        $periodStartsOnFirstVisit
     * @return SubscriptionArticle
     */
    public function setPeriodStartsOnFirstVisit($periodStartsOnFirstVisit)
    {
        $this->PeriodStartsOnFirstVisit = $periodStartsOnFirstVisit;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPeriodStartsOnFirstVisit()
    {
        return $this->PeriodStartsOnFirstVisit;
    }

    /**
     * @param  Duration|null       $periodDuration
     * @return SubscriptionArticle
     */
    public function setPeriodDuration(Duration $periodDuration = null)
    {
        $this->PeriodDuration = $periodDuration;

        return $this;
    }

    /**
     * @return Duration|null
     */
    public function getPeriodDuration()
    {
        return $this->PeriodDuration;
    }

    /**
     * @param  boolean|null        $isFixedPeriod
     * @return SubscriptionArticle
     */
    public function setIsFixedPeriod($isFixedPeriod)
    {
        $this->IsFixedPeriod = $isFixedPeriod;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsFixedPeriod()
    {
        return $this->IsFixedPeriod;
    }

    /**
     * @param  Period|null         $fixedPeriod
     * @return SubscriptionArticle
     */
    public function setFixedPeriod(Period $fixedPeriod = null)
    {
        $this->FixedPeriod = $fixedPeriod;

        return $this;
    }

    /**
     * @return Period|null
     */
    public function getFixedPeriod()
    {
        return $this->FixedPeriod;
    }

    /**
     * @param  boolean|null        $checkMaximumDurationVisit
     * @return SubscriptionArticle
     */
    public function setCheckMaximumDurationVisit($checkMaximumDurationVisit)
    {
        $this->CheckMaximumDurationVisit = $checkMaximumDurationVisit;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getCheckMaximumDurationVisit()
    {
        return $this->CheckMaximumDurationVisit;
    }

    /**
     * @param  string|null         $maximumDurationVisit
     * @return SubscriptionArticle
     */
    public function setMaximumDurationVisit($maximumDurationVisit)
    {
        $this->MaximumDurationVisit = $maximumDurationVisit;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMaximumDurationVisit()
    {
        return $this->MaximumDurationVisit;
    }

    /**
     * @param  boolean|null        $checkMinimumDurationNextVisit
     * @return SubscriptionArticle
     */
    public function setCheckMinimumDurationNextVisit($checkMinimumDurationNextVisit)
    {
        $this->CheckMinimumDurationNextVisit = $checkMinimumDurationNextVisit;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getCheckMinimumDurationNextVisit()
    {
        return $this->CheckMinimumDurationNextVisit;
    }

    /**
     * @param  string|null         $minimumDurationNextVisit
     * @return SubscriptionArticle
     */
    public function setMinimumDurationNextVisit($minimumDurationNextVisit)
    {
        $this->MinimumDurationNextVisit = $minimumDurationNextVisit;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMinimumDurationNextVisit()
    {
        return $this->MinimumDurationNextVisit;
    }

    /**
     * @param  boolean|null        $checkTurnsPerPeriod
     * @return SubscriptionArticle
     */
    public function setCheckTurnsPerPeriod($checkTurnsPerPeriod)
    {
        $this->CheckTurnsPerPeriod = $checkTurnsPerPeriod;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getCheckTurnsPerPeriod()
    {
        return $this->CheckTurnsPerPeriod;
    }

    /**
     * @param  integer|null        $turnsPerPeriod
     * @return SubscriptionArticle
     */
    public function setTurnsPerPeriod($turnsPerPeriod)
    {
        $this->TurnsPerPeriod = $turnsPerPeriod;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getTurnsPerPeriod()
    {
        return $this->TurnsPerPeriod;
    }

    /**
     * @param  boolean|null        $isEticket
     * @return SubscriptionArticle
     */
    public function setIsEticket($isEticket)
    {
        $this->IsEticket = $isEticket;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsEticket()
    {
        return $this->IsEticket;
    }

    /**
     * @param  SubscriptionPeriod|null $subscriptionPeriod
     * @return SubscriptionArticle
     */
    public function setSubscriptionPeriod(SubscriptionPeriod $subscriptionPeriod = null)
    {
        $this->SubscriptionPeriod = $subscriptionPeriod;

        return $this;
    }

    /**
     * @return SubscriptionPeriod|null
     */
    public function getSubscriptionPeriod()
    {
        return $this->SubscriptionPeriod;
    }

}
