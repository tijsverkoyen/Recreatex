<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RentalReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RentalReservation';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ArticleId
     */
    protected $ArticleId;

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
     * @var string|null $Until
     */
    protected $Until;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Delivery
     */
    protected $Delivery;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Return
     */
    protected $Return;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var LockTicket|null $LockTicket
     */
    protected $LockTicket;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $OrderWithoutPayment
     */
    protected $OrderWithoutPayment;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $RentalPrice
     */
    protected $RentalPrice;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Comments
     */
    protected $Comments;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Person|null $Customer
     */
    protected $Customer;

    /**
     * @param  SimpleType\guid|null $articleId
     * @return RentalReservation
     */
    public function setArticleId(SimpleType\guid $articleId = null)
    {
        $this->ArticleId = $articleId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getArticleId()
    {
        return $this->ArticleId;
    }

    /**
     * @param  string|null       $from
     * @return RentalReservation
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
     * @param  string|null       $until
     * @return RentalReservation
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
     * @param  string|null       $delivery
     * @return RentalReservation
     */
    public function setDelivery($delivery)
    {
        $this->Delivery = $delivery;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDelivery()
    {
        return $this->Delivery;
    }

    /**
     * @param  string|null       $return
     * @return RentalReservation
     */
    public function setReturn($return)
    {
        $this->Return = $return;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReturn()
    {
        return $this->Return;
    }

    /**
     * @param  LockTicket|null   $lockTicket
     * @return RentalReservation
     */
    public function setLockTicket(LockTicket $lockTicket = null)
    {
        $this->LockTicket = $lockTicket;

        return $this;
    }

    /**
     * @return LockTicket|null
     */
    public function getLockTicket()
    {
        return $this->LockTicket;
    }

    /**
     * @param  boolean|null      $orderWithoutPayment
     * @return RentalReservation
     */
    public function setOrderWithoutPayment($orderWithoutPayment)
    {
        $this->OrderWithoutPayment = $orderWithoutPayment;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getOrderWithoutPayment()
    {
        return $this->OrderWithoutPayment;
    }

    /**
     * @param  float|null        $rentalPrice
     * @return RentalReservation
     */
    public function setRentalPrice($rentalPrice)
    {
        $this->RentalPrice = $rentalPrice;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getRentalPrice()
    {
        return $this->RentalPrice;
    }

    /**
     * @param  string|null       $comments
     * @return RentalReservation
     */
    public function setComments($comments)
    {
        $this->Comments = $comments;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param  Person|null       $customer
     * @return RentalReservation
     */
    public function setCustomer(Person $customer = null)
    {
        $this->Customer = $customer;

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

}
