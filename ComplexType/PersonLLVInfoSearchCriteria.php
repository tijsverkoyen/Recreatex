<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonLLVInfoSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonLLVInfoSearchCriteria';

    /**
     * @var SimpleTypeGuid
     */
    protected $LessonGroupId;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @param  SimpleType\Guid[optional]   $lessonGroupId
     * @return PersonLLVInfoSearchCriteria
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
     * @param  SimpleType\Guid[optional]   $personId
     * @return PersonLLVInfoSearchCriteria
     */
    public function setPersonId(SimpleType\Guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }
}
