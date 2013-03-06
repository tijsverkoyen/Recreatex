<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class WaitingListSale extends ComplexTypeAbstract
{
    const CLASS_NAME = 'WaitingListSale';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $WaitingListId
     */
    protected $WaitingListId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ItemId
     */
    protected $ItemId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfLessonGroup|null $WaitingListLessonGroups
     */
    protected $WaitingListLessonGroups;

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
     * @var SimpleType\guid|null $PersonID
     */
    protected $PersonID;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Comments
     */
    protected $Comments;

    /**
     * @param  SimpleType\guid|null $waitingListId
     * @return WaitingListSale
     */
    public function setWaitingListId(SimpleType\guid $waitingListId = null)
    {
        $this->WaitingListId = $waitingListId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getWaitingListId()
    {
        return $this->WaitingListId;
    }

    /**
     * @param  SimpleType\guid|null $itemId
     * @return WaitingListSale
     */
    public function setItemId(SimpleType\guid $itemId = null)
    {
        $this->ItemId = $itemId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }

    /**
     * @param  ArrayOfLessonGroup|null $waitingListLessonGroups
     * @return WaitingListSale
     */
    public function setWaitingListLessonGroups(ArrayOfLessonGroup $waitingListLessonGroups = null)
    {
        $this->WaitingListLessonGroups = $waitingListLessonGroups;

        return $this;
    }

    /**
     * @return ArrayOfLessonGroup|null
     */
    public function getWaitingListLessonGroups()
    {
        return $this->WaitingListLessonGroups;
    }

    /**
     * @param  LockTicket|null $lockTicket
     * @return WaitingListSale
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
     * @param  SimpleType\guid|null $personID
     * @return WaitingListSale
     */
    public function setPersonID(SimpleType\guid $personID = null)
    {
        $this->PersonID = $personID;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPersonID()
    {
        return $this->PersonID;
    }

    /**
     * @param  string|null     $comments
     * @return WaitingListSale
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

}
