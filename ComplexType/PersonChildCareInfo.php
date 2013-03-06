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
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var ChildCareSchool
     */
    protected $School;

    /**
     * @var boolean
     */
    protected $LeaveAlone;

    /**
     * @var string
     */
    protected $MedicationInfo;

    /**
     * @var string
     */
    protected $AllergyInfo;

    /**
     * @var string
     */
    protected $OtherMedicalInfo;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return PersonChildCareInfo
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  ChildCareSchool[optional] $school
     * @return PersonChildCareInfo
     */
    public function setSchool(ChildCareSchool $school = null)
    {
        $this->School = $school;

        return $this;
    }

    /**
     * @return ChildCareSchool
     */
    public function getSchool()
    {
        return $this->School;
    }

    /**
     * @param  boolean[optional]   $leaveAlone
     * @return PersonChildCareInfo
     */
    public function setLeaveAlone($leaveAlone)
    {
        $this->LeaveAlone = $leaveAlone;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLeaveAlone()
    {
        return $this->LeaveAlone;
    }

    /**
     * @param  string[optional]    $medicationInfo
     * @return PersonChildCareInfo
     */
    public function setMedicationInfo($medicationInfo)
    {
        $this->MedicationInfo = $medicationInfo;

        return $this;
    }

    /**
     * @return string
     */
    public function getMedicationInfo()
    {
        return $this->MedicationInfo;
    }

    /**
     * @param  string[optional]    $allergyInfo
     * @return PersonChildCareInfo
     */
    public function setAllergyInfo($allergyInfo)
    {
        $this->AllergyInfo = $allergyInfo;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllergyInfo()
    {
        return $this->AllergyInfo;
    }

    /**
     * @param  string[optional]    $otherMedicalInfo
     * @return PersonChildCareInfo
     */
    public function setOtherMedicalInfo($otherMedicalInfo)
    {
        $this->OtherMedicalInfo = $otherMedicalInfo;

        return $this;
    }

    /**
     * @return string
     */
    public function getOtherMedicalInfo()
    {
        return $this->OtherMedicalInfo;
    }
}
