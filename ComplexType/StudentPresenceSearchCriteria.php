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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $LessonGroupId
     */
    protected $LessonGroupId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $AddressId
     */
    protected $AddressId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $SelectedDateTime
     */
    protected $SelectedDateTime;

    /**
     * @param  SimpleType\guid|null          $lessonGroupId
     * @return StudentPresenceSearchCriteria
     */
    public function setLessonGroupId(SimpleType\guid $lessonGroupId = null)
    {
        $this->LessonGroupId = $lessonGroupId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getLessonGroupId()
    {
        return $this->LessonGroupId;
    }

    /**
     * @param  SimpleType\guid|null          $addressId
     * @return StudentPresenceSearchCriteria
     */
    public function setAddressId(SimpleType\guid $addressId = null)
    {
        $this->AddressId = $addressId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getAddressId()
    {
        return $this->AddressId;
    }

    /**
     * @param  string|null                   $selectedDateTime
     * @return StudentPresenceSearchCriteria
     */
    public function setSelectedDateTime($selectedDateTime)
    {
        $this->SelectedDateTime = $selectedDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSelectedDateTime()
    {
        return $this->SelectedDateTime;
    }

}
