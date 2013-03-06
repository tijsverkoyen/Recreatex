<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonChildCareInfo extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonChildCareInfo';

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
     * @var ChildCareSchool|null $School
     */
    protected $School;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $LeaveAlone
     */
    protected $LeaveAlone;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $MedicationInfo
     */
    protected $MedicationInfo;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $AllergyInfo
     */
    protected $AllergyInfo;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $OtherMedicalInfo
     */
    protected $OtherMedicalInfo;

    /**
     * @param  SimpleType\guid|null $id
     * @return PersonChildCareInfo
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
     * @param  ChildCareSchool|null $school
     * @return PersonChildCareInfo
     */
    public function setSchool(ChildCareSchool $school = null)
    {
        $this->School = $school;

        return $this;
    }

    /**
     * @return ChildCareSchool|null
     */
    public function getSchool()
    {
        return $this->School;
    }

    /**
     * @param  boolean|null        $leaveAlone
     * @return PersonChildCareInfo
     */
    public function setLeaveAlone($leaveAlone)
    {
        $this->LeaveAlone = $leaveAlone;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getLeaveAlone()
    {
        return $this->LeaveAlone;
    }

    /**
     * @param  string|null         $medicationInfo
     * @return PersonChildCareInfo
     */
    public function setMedicationInfo($medicationInfo)
    {
        $this->MedicationInfo = $medicationInfo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMedicationInfo()
    {
        return $this->MedicationInfo;
    }

    /**
     * @param  string|null         $allergyInfo
     * @return PersonChildCareInfo
     */
    public function setAllergyInfo($allergyInfo)
    {
        $this->AllergyInfo = $allergyInfo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAllergyInfo()
    {
        return $this->AllergyInfo;
    }

    /**
     * @param  string|null         $otherMedicalInfo
     * @return PersonChildCareInfo
     */
    public function setOtherMedicalInfo($otherMedicalInfo)
    {
        $this->OtherMedicalInfo = $otherMedicalInfo;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOtherMedicalInfo()
    {
        return $this->OtherMedicalInfo;
    }

}
