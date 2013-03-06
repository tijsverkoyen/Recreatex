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
     * @var SimpleType\guid|null $AddressId
     */
    protected $AddressId;

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
     * @var string|null $Name
     */
    protected $Name;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FirstName
     */
    protected $FirstName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $MiddleName
     */
    protected $MiddleName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Date
     */
    protected $Date;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm1
     */
    protected $Norm1;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm2
     */
    protected $Norm2;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm3
     */
    protected $Norm3;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm4
     */
    protected $Norm4;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm5
     */
    protected $Norm5;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm6
     */
    protected $Norm6;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm7
     */
    protected $Norm7;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm8
     */
    protected $Norm8;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm9
     */
    protected $Norm9;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm10
     */
    protected $Norm10;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm11
     */
    protected $Norm11;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm12
     */
    protected $Norm12;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm13
     */
    protected $Norm13;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm14
     */
    protected $Norm14;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm15
     */
    protected $Norm15;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm16
     */
    protected $Norm16;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm17
     */
    protected $Norm17;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm18
     */
    protected $Norm18;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm19
     */
    protected $Norm19;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Norm20
     */
    protected $Norm20;

    /**
     * @param  SimpleType\guid|null $id
     * @return StudentFollowScore
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
     * @param  SimpleType\guid|null $addressId
     * @return StudentFollowScore
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
     * @param  SimpleType\guid|null $lessonGroupId
     * @return StudentFollowScore
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
     * @param  string|null        $name
     * @return StudentFollowScore
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param  string|null        $firstName
     * @return StudentFollowScore
     */
    public function setFirstName($firstName)
    {
        $this->FirstName = $firstName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param  string|null        $middleName
     * @return StudentFollowScore
     */
    public function setMiddleName($middleName)
    {
        $this->MiddleName = $middleName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }

    /**
     * @param  string|null        $date
     * @return StudentFollowScore
     */
    public function setDate($date)
    {
        $this->Date = $date;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param  integer|null       $norm1
     * @return StudentFollowScore
     */
    public function setNorm1($norm1)
    {
        $this->Norm1 = $norm1;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm1()
    {
        return $this->Norm1;
    }

    /**
     * @param  integer|null       $norm2
     * @return StudentFollowScore
     */
    public function setNorm2($norm2)
    {
        $this->Norm2 = $norm2;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm2()
    {
        return $this->Norm2;
    }

    /**
     * @param  integer|null       $norm3
     * @return StudentFollowScore
     */
    public function setNorm3($norm3)
    {
        $this->Norm3 = $norm3;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm3()
    {
        return $this->Norm3;
    }

    /**
     * @param  integer|null       $norm4
     * @return StudentFollowScore
     */
    public function setNorm4($norm4)
    {
        $this->Norm4 = $norm4;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm4()
    {
        return $this->Norm4;
    }

    /**
     * @param  integer|null       $norm5
     * @return StudentFollowScore
     */
    public function setNorm5($norm5)
    {
        $this->Norm5 = $norm5;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm5()
    {
        return $this->Norm5;
    }

    /**
     * @param  integer|null       $norm6
     * @return StudentFollowScore
     */
    public function setNorm6($norm6)
    {
        $this->Norm6 = $norm6;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm6()
    {
        return $this->Norm6;
    }

    /**
     * @param  integer|null       $norm7
     * @return StudentFollowScore
     */
    public function setNorm7($norm7)
    {
        $this->Norm7 = $norm7;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm7()
    {
        return $this->Norm7;
    }

    /**
     * @param  integer|null       $norm8
     * @return StudentFollowScore
     */
    public function setNorm8($norm8)
    {
        $this->Norm8 = $norm8;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm8()
    {
        return $this->Norm8;
    }

    /**
     * @param  integer|null       $norm9
     * @return StudentFollowScore
     */
    public function setNorm9($norm9)
    {
        $this->Norm9 = $norm9;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm9()
    {
        return $this->Norm9;
    }

    /**
     * @param  integer|null       $norm10
     * @return StudentFollowScore
     */
    public function setNorm10($norm10)
    {
        $this->Norm10 = $norm10;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm10()
    {
        return $this->Norm10;
    }

    /**
     * @param  integer|null       $norm11
     * @return StudentFollowScore
     */
    public function setNorm11($norm11)
    {
        $this->Norm11 = $norm11;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm11()
    {
        return $this->Norm11;
    }

    /**
     * @param  integer|null       $norm12
     * @return StudentFollowScore
     */
    public function setNorm12($norm12)
    {
        $this->Norm12 = $norm12;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm12()
    {
        return $this->Norm12;
    }

    /**
     * @param  integer|null       $norm13
     * @return StudentFollowScore
     */
    public function setNorm13($norm13)
    {
        $this->Norm13 = $norm13;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm13()
    {
        return $this->Norm13;
    }

    /**
     * @param  integer|null       $norm14
     * @return StudentFollowScore
     */
    public function setNorm14($norm14)
    {
        $this->Norm14 = $norm14;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm14()
    {
        return $this->Norm14;
    }

    /**
     * @param  integer|null       $norm15
     * @return StudentFollowScore
     */
    public function setNorm15($norm15)
    {
        $this->Norm15 = $norm15;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm15()
    {
        return $this->Norm15;
    }

    /**
     * @param  integer|null       $norm16
     * @return StudentFollowScore
     */
    public function setNorm16($norm16)
    {
        $this->Norm16 = $norm16;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm16()
    {
        return $this->Norm16;
    }

    /**
     * @param  integer|null       $norm17
     * @return StudentFollowScore
     */
    public function setNorm17($norm17)
    {
        $this->Norm17 = $norm17;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm17()
    {
        return $this->Norm17;
    }

    /**
     * @param  integer|null       $norm18
     * @return StudentFollowScore
     */
    public function setNorm18($norm18)
    {
        $this->Norm18 = $norm18;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm18()
    {
        return $this->Norm18;
    }

    /**
     * @param  integer|null       $norm19
     * @return StudentFollowScore
     */
    public function setNorm19($norm19)
    {
        $this->Norm19 = $norm19;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm19()
    {
        return $this->Norm19;
    }

    /**
     * @param  integer|null       $norm20
     * @return StudentFollowScore
     */
    public function setNorm20($norm20)
    {
        $this->Norm20 = $norm20;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNorm20()
    {
        return $this->Norm20;
    }

}
