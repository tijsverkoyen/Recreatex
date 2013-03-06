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
     * @var boolean
     */
    protected $CheckTurns;

    /**
     * @var integer
     */
    protected $NumberOfTurns;

    /**
     * @var integer
     */
    protected $MinimumTurns;

    /**
     * @var boolean
     */
    protected $CheckPeriod;

    /**
     * @var boolean
     */
    protected $PeriodStartsOnFirstVisit;

    /**
     * @var Duration
     */
    protected $PeriodDuration;

    /**
     * @var boolean
     */
    protected $IsFixedPeriod;

    /**
     * @var Period
     */
    protected $FixedPeriod;

    /**
     * @var boolean
     */
    protected $CheckMaximumDurationVisit;

    /**
     * @var string
     */
    protected $MaximumDurationVisit;

    /**
     * @var boolean
     */
    protected $CheckMinimumDurationNextVisit;

    /**
     * @var string
     */
    protected $MinimumDurationNextVisit;

    /**
     * @var boolean
     */
    protected $CheckTurnsPerPeriod;

    /**
     * @var integer
     */
    protected $TurnsPerPeriod;

    /**
     * @var boolean
     */
    protected $IsEticket;

    /**
     * @var SubscriptionPeriod
     */
    protected $SubscriptionPeriod;

    /**
     * @param  boolean[optional]   $checkTurns
     * @return SubscriptionArticle
     */
    public function setCheckTurns($checkTurns)
    {
        $this->CheckTurns = $checkTurns;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getCheckTurns()
    {
        return $this->CheckTurns;
    }

    /**
     * @param  integer[optional]   $numberOfTurns
     * @return SubscriptionArticle
     */
    public function setNumberOfTurns($numberOfTurns)
    {
        $this->NumberOfTurns = $numberOfTurns;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumberOfTurns()
    {
        return $this->NumberOfTurns;
    }

    /**
     * @param  integer[optional]   $minimumTurns
     * @return SubscriptionArticle
     */
    public function setMinimumTurns($minimumTurns)
    {
        $this->MinimumTurns = $minimumTurns;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMinimumTurns()
    {
        return $this->MinimumTurns;
    }

    /**
     * @param  boolean[optional]   $checkPeriod
     * @return SubscriptionArticle
     */
    public function setCheckPeriod($checkPeriod)
    {
        $this->CheckPeriod = $checkPeriod;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getCheckPeriod()
    {
        return $this->CheckPeriod;
    }

    /**
     * @param  boolean[optional]   $periodStartsOnFirstVisit
     * @return SubscriptionArticle
     */
    public function setPeriodStartsOnFirstVisit($periodStartsOnFirstVisit)
    {
        $this->PeriodStartsOnFirstVisit = $periodStartsOnFirstVisit;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPeriodStartsOnFirstVisit()
    {
        return $this->PeriodStartsOnFirstVisit;
    }

    /**
     * @param  Duration[optional]  $periodDuration
     * @return SubscriptionArticle
     */
    public function setPeriodDuration(Duration $periodDuration = null)
    {
        $this->PeriodDuration = $periodDuration;

        return $this;
    }

    /**
     * @return Duration
     */
    public function getPeriodDuration()
    {
        return $this->PeriodDuration;
    }

    /**
     * @param  boolean[optional]   $isFixedPeriod
     * @return SubscriptionArticle
     */
    public function setIsFixedPeriod($isFixedPeriod)
    {
        $this->IsFixedPeriod = $isFixedPeriod;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFixedPeriod()
    {
        return $this->IsFixedPeriod;
    }

    /**
     * @param  Period[optional]    $fixedPeriod
     * @return SubscriptionArticle
     */
    public function setFixedPeriod(Period $fixedPeriod = null)
    {
        $this->FixedPeriod = $fixedPeriod;

        return $this;
    }

    /**
     * @return Period
     */
    public function getFixedPeriod()
    {
        return $this->FixedPeriod;
    }

    /**
     * @param  boolean[optional]   $checkMaximumDurationVisit
     * @return SubscriptionArticle
     */
    public function setCheckMaximumDurationVisit($checkMaximumDurationVisit)
    {
        $this->CheckMaximumDurationVisit = $checkMaximumDurationVisit;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getCheckMaximumDurationVisit()
    {
        return $this->CheckMaximumDurationVisit;
    }

    /**
     * @param  string[optional]    $maximumDurationVisit
     * @return SubscriptionArticle
     */
    public function setMaximumDurationVisit($maximumDurationVisit)
    {
        $this->MaximumDurationVisit = $maximumDurationVisit;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaximumDurationVisit()
    {
        return $this->MaximumDurationVisit;
    }

    /**
     * @param  boolean[optional]   $checkMinimumDurationNextVisit
     * @return SubscriptionArticle
     */
    public function setCheckMinimumDurationNextVisit($checkMinimumDurationNextVisit)
    {
        $this->CheckMinimumDurationNextVisit = $checkMinimumDurationNextVisit;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getCheckMinimumDurationNextVisit()
    {
        return $this->CheckMinimumDurationNextVisit;
    }

    /**
     * @param  string[optional]    $minimumDurationNextVisit
     * @return SubscriptionArticle
     */
    public function setMinimumDurationNextVisit($minimumDurationNextVisit)
    {
        $this->MinimumDurationNextVisit = $minimumDurationNextVisit;

        return $this;
    }

    /**
     * @return string
     */
    public function getMinimumDurationNextVisit()
    {
        return $this->MinimumDurationNextVisit;
    }

    /**
     * @param  boolean[optional]   $checkTurnsPerPeriod
     * @return SubscriptionArticle
     */
    public function setCheckTurnsPerPeriod($checkTurnsPerPeriod)
    {
        $this->CheckTurnsPerPeriod = $checkTurnsPerPeriod;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getCheckTurnsPerPeriod()
    {
        return $this->CheckTurnsPerPeriod;
    }

    /**
     * @param  integer[optional]   $turnsPerPeriod
     * @return SubscriptionArticle
     */
    public function setTurnsPerPeriod($turnsPerPeriod)
    {
        $this->TurnsPerPeriod = $turnsPerPeriod;

        return $this;
    }

    /**
     * @return integer
     */
    public function getTurnsPerPeriod()
    {
        return $this->TurnsPerPeriod;
    }

    /**
     * @param  boolean[optional]   $isEticket
     * @return SubscriptionArticle
     */
    public function setIsEticket($isEticket)
    {
        $this->IsEticket = $isEticket;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEticket()
    {
        return $this->IsEticket;
    }

    /**
     * @param  SubscriptionPeriod[optional] $subscriptionPeriod
     * @return SubscriptionArticle
     */
    public function setSubscriptionPeriod(SubscriptionPeriod $subscriptionPeriod = null)
    {
        $this->SubscriptionPeriod = $subscriptionPeriod;

        return $this;
    }

    /**
     * @return SubscriptionPeriod
     */
    public function getSubscriptionPeriod()
    {
        return $this->SubscriptionPeriod;
    }
}
