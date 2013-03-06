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
     * @var SimpleTypeGuid
     */
    protected $WaitingListId;

    /**
     * @var SimpleTypeGuid
     */
    protected $ItemId;

    /**
     * @var ArrayOfLessonGroup
     */
    protected $WaitingListLessonGroups;

    /**
     * @var LockTicket
     */
    protected $LockTicket;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonID;

    /**
     * @var string
     */
    protected $Comments;

    /**
     * @param  SimpleType\Guid[optional] $waitingListId
     * @return WaitingListSale
     */
    public function setWaitingListId(SimpleType\Guid $waitingListId = null)
    {
        $this->WaitingListId = $waitingListId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getWaitingListId()
    {
        return $this->WaitingListId;
    }

    /**
     * @param  SimpleType\Guid[optional] $itemId
     * @return WaitingListSale
     */
    public function setItemId(SimpleType\Guid $itemId = null)
    {
        $this->ItemId = $itemId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getItemId()
    {
        return $this->ItemId;
    }

    /**
     * @param  ArrayOfLessonGroup[optional] $waitingListLessonGroups
     * @return WaitingListSale
     */
    public function setWaitingListLessonGroups(ArrayOfLessonGroup $waitingListLessonGroups = null)
    {
        $this->WaitingListLessonGroups = $waitingListLessonGroups;

        return $this;
    }

    /**
     * @return ArrayOfLessonGroup
     */
    public function getWaitingListLessonGroups()
    {
        return $this->WaitingListLessonGroups;
    }

    /**
     * @param  LockTicket[optional] $lockTicket
     * @return WaitingListSale
     */
    public function setLockTicket(LockTicket $lockTicket = null)
    {
        $this->LockTicket = $lockTicket;

        return $this;
    }

    /**
     * @return LockTicket
     */
    public function getLockTicket()
    {
        return $this->LockTicket;
    }

    /**
     * @param  SimpleType\Guid[optional] $personID
     * @return WaitingListSale
     */
    public function setPersonID(SimpleType\Guid $personID = null)
    {
        $this->PersonID = $personID;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPersonID()
    {
        return $this->PersonID;
    }

    /**
     * @param  string[optional] $comments
     * @return WaitingListSale
     */
    public function setComments($comments)
    {
        $this->Comments = $comments;

        return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->Comments;
    }
}
