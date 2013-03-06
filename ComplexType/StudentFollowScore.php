<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class StudentFollowScore extends ComplexTypeAbstract
{
    const CLASS_NAME = 'StudentFollowScore';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $AddressId;

    /**
     * @var SimpleTypeGuid
     */
    protected $LessonGroupId;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var string
     */
    protected $FirstName;

    /**
     * @var string
     */
    protected $MiddleName;

    /**
     * @var string
     */
    protected $Date;

    /**
     * @var integer
     */
    protected $Norm1;

    /**
     * @var integer
     */
    protected $Norm2;

    /**
     * @var integer
     */
    protected $Norm3;

    /**
     * @var integer
     */
    protected $Norm4;

    /**
     * @var integer
     */
    protected $Norm5;

    /**
     * @var integer
     */
    protected $Norm6;

    /**
     * @var integer
     */
    protected $Norm7;

    /**
     * @var integer
     */
    protected $Norm8;

    /**
     * @var integer
     */
    protected $Norm9;

    /**
     * @var integer
     */
    protected $Norm10;

    /**
     * @var integer
     */
    protected $Norm11;

    /**
     * @var integer
     */
    protected $Norm12;

    /**
     * @var integer
     */
    protected $Norm13;

    /**
     * @var integer
     */
    protected $Norm14;

    /**
     * @var integer
     */
    protected $Norm15;

    /**
     * @var integer
     */
    protected $Norm16;

    /**
     * @var integer
     */
    protected $Norm17;

    /**
     * @var integer
     */
    protected $Norm18;

    /**
     * @var integer
     */
    protected $Norm19;

    /**
     * @var integer
     */
    protected $Norm20;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return StudentFollowScore
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
     * @param  SimpleType\Guid[optional] $addressId
     * @return StudentFollowScore
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
     * @param  SimpleType\Guid[optional] $lessonGroupId
     * @return StudentFollowScore
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
     * @param  string[optional]   $name
     * @return StudentFollowScore
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  string[optional]   $firstName
     * @return StudentFollowScore
     */
    public function setFirstName($firstName)
    {
        $this->FirstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param  string[optional]   $middleName
     * @return StudentFollowScore
     */
    public function setMiddleName($middleName)
    {
        $this->MiddleName = $middleName;

        return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }

    /**
     * @param  string[optional]   $date
     * @return StudentFollowScore
     */
    public function setDate($date)
    {
        $this->Date = $date;

        return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param  integer[optional]  $norm1
     * @return StudentFollowScore
     */
    public function setNorm1($norm1)
    {
        $this->Norm1 = $norm1;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm1()
    {
        return $this->Norm1;
    }

    /**
     * @param  integer[optional]  $norm2
     * @return StudentFollowScore
     */
    public function setNorm2($norm2)
    {
        $this->Norm2 = $norm2;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm2()
    {
        return $this->Norm2;
    }

    /**
     * @param  integer[optional]  $norm3
     * @return StudentFollowScore
     */
    public function setNorm3($norm3)
    {
        $this->Norm3 = $norm3;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm3()
    {
        return $this->Norm3;
    }

    /**
     * @param  integer[optional]  $norm4
     * @return StudentFollowScore
     */
    public function setNorm4($norm4)
    {
        $this->Norm4 = $norm4;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm4()
    {
        return $this->Norm4;
    }

    /**
     * @param  integer[optional]  $norm5
     * @return StudentFollowScore
     */
    public function setNorm5($norm5)
    {
        $this->Norm5 = $norm5;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm5()
    {
        return $this->Norm5;
    }

    /**
     * @param  integer[optional]  $norm6
     * @return StudentFollowScore
     */
    public function setNorm6($norm6)
    {
        $this->Norm6 = $norm6;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm6()
    {
        return $this->Norm6;
    }

    /**
     * @param  integer[optional]  $norm7
     * @return StudentFollowScore
     */
    public function setNorm7($norm7)
    {
        $this->Norm7 = $norm7;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm7()
    {
        return $this->Norm7;
    }

    /**
     * @param  integer[optional]  $norm8
     * @return StudentFollowScore
     */
    public function setNorm8($norm8)
    {
        $this->Norm8 = $norm8;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm8()
    {
        return $this->Norm8;
    }

    /**
     * @param  integer[optional]  $norm9
     * @return StudentFollowScore
     */
    public function setNorm9($norm9)
    {
        $this->Norm9 = $norm9;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm9()
    {
        return $this->Norm9;
    }

    /**
     * @param  integer[optional]  $norm10
     * @return StudentFollowScore
     */
    public function setNorm10($norm10)
    {
        $this->Norm10 = $norm10;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm10()
    {
        return $this->Norm10;
    }

    /**
     * @param  integer[optional]  $norm11
     * @return StudentFollowScore
     */
    public function setNorm11($norm11)
    {
        $this->Norm11 = $norm11;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm11()
    {
        return $this->Norm11;
    }

    /**
     * @param  integer[optional]  $norm12
     * @return StudentFollowScore
     */
    public function setNorm12($norm12)
    {
        $this->Norm12 = $norm12;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm12()
    {
        return $this->Norm12;
    }

    /**
     * @param  integer[optional]  $norm13
     * @return StudentFollowScore
     */
    public function setNorm13($norm13)
    {
        $this->Norm13 = $norm13;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm13()
    {
        return $this->Norm13;
    }

    /**
     * @param  integer[optional]  $norm14
     * @return StudentFollowScore
     */
    public function setNorm14($norm14)
    {
        $this->Norm14 = $norm14;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm14()
    {
        return $this->Norm14;
    }

    /**
     * @param  integer[optional]  $norm15
     * @return StudentFollowScore
     */
    public function setNorm15($norm15)
    {
        $this->Norm15 = $norm15;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm15()
    {
        return $this->Norm15;
    }

    /**
     * @param  integer[optional]  $norm16
     * @return StudentFollowScore
     */
    public function setNorm16($norm16)
    {
        $this->Norm16 = $norm16;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm16()
    {
        return $this->Norm16;
    }

    /**
     * @param  integer[optional]  $norm17
     * @return StudentFollowScore
     */
    public function setNorm17($norm17)
    {
        $this->Norm17 = $norm17;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm17()
    {
        return $this->Norm17;
    }

    /**
     * @param  integer[optional]  $norm18
     * @return StudentFollowScore
     */
    public function setNorm18($norm18)
    {
        $this->Norm18 = $norm18;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm18()
    {
        return $this->Norm18;
    }

    /**
     * @param  integer[optional]  $norm19
     * @return StudentFollowScore
     */
    public function setNorm19($norm19)
    {
        $this->Norm19 = $norm19;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm19()
    {
        return $this->Norm19;
    }

    /**
     * @param  integer[optional]  $norm20
     * @return StudentFollowScore
     */
    public function setNorm20($norm20)
    {
        $this->Norm20 = $norm20;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNorm20()
    {
        return $this->Norm20;
    }
}
