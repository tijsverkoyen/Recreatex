<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfLessonGroup extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfLessonGroup';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $LessonGroup = array();

    /**
     * @param  array              $lessonGroup
     * @return ArrayOfLessonGroup
     */
    public function setLessonGroup(array $lessonGroup = array())
    {
        $this->LessonGroup = $lessonGroup;

        return $this;
    }

    /**
     * @return array
     */
    public function getLessonGroup()
    {
        return $this->LessonGroup;
    }
}
