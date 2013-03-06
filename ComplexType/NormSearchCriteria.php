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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $LessonGroupId
     */
    protected $LessonGroupId;

    /**
     * @param  SimpleType\guid|null $lessonGroupId
     * @return NormSearchCriteria
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

}
