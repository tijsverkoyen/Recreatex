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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $PreviousScore
     */
    protected $PreviousScore;

    /**
     * @param  SimpleType\guid|null             $lessonGroupId
     * @return StudentFollowScoreSearchCriteria
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
     * @param  SimpleType\guid|null             $addressId
     * @return StudentFollowScoreSearchCriteria
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
     * @param  string|null                      $selectedDateTime
     * @return StudentFollowScoreSearchCriteria
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

    /**
     * @param  boolean|null                     $previousScore
     * @return StudentFollowScoreSearchCriteria
     */
    public function setPreviousScore($previousScore)
    {
        $this->PreviousScore = $previousScore;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPreviousScore()
    {
        return $this->PreviousScore;
    }

}
