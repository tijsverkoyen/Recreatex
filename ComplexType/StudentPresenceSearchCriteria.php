<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class StudentPresenceSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'StudentPresenceSearchCriteria';

    /**
     * @var SimpleTypeGuid
     */
    protected $LessonGroupId;

    /**
     * @var SimpleTypeGuid
     */
    protected $AddressId;

    /**
     * @var string
     */
    protected $SelectedDateTime;

    /**
     * @param  SimpleType\Guid[optional]     $lessonGroupId
     * @return StudentPresenceSearchCriteria
     */
    public function setLessonGroupId(SimpleType\Guid $lessonGroupId = null)
    {
        $this->LessonGroupId = $lessonGroupId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getLessonGroupId()
    {
        return $this->LessonGroupId;
    }

    /**
     * @param  SimpleType\Guid[optional]     $addressId
     * @return StudentPresenceSearchCriteria
     */
    public function setAddressId(SimpleType\Guid $addressId = null)
    {
        $this->AddressId = $addressId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getAddressId()
    {
        return $this->AddressId;
    }

    /**
     * @param  string[optional]              $selectedDateTime
     * @return StudentPresenceSearchCriteria
     */
    public function setSelectedDateTime($selectedDateTime)
    {
        $this->SelectedDateTime = $selectedDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getSelectedDateTime()
    {
        return $this->SelectedDateTime;
    }
}
