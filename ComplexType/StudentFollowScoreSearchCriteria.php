<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class StudentFollowScoreSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'StudentFollowScoreSearchCriteria';

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
     * @var boolean
     */
    protected $PreviousScore;

    /**
     * @param  SimpleType\Guid[optional]        $lessonGroupId
     * @return StudentFollowScoreSearchCriteria
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
     * @param  SimpleType\Guid[optional]        $addressId
     * @return StudentFollowScoreSearchCriteria
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
     * @param  string[optional]                 $selectedDateTime
     * @return StudentFollowScoreSearchCriteria
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

    /**
     * @param  boolean[optional]                $previousScore
     * @return StudentFollowScoreSearchCriteria
     */
    public function setPreviousScore($previousScore)
    {
        $this->PreviousScore = $previousScore;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPreviousScore()
    {
        return $this->PreviousScore;
    }
}
