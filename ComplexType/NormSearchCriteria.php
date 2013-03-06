<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class NormSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'NormSearchCriteria';

    /**
     * @var SimpleTypeGuid
     */
    protected $LessonGroupId;

    /**
     * @param  SimpleType\Guid[optional] $lessonGroupId
     * @return NormSearchCriteria
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
}
