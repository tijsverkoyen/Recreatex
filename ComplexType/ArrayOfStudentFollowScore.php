<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfStudentFollowScore extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfStudentFollowScore';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $StudentFollowScore = array();

    /**
     * @param  array                     $studentFollowScore
     * @return ArrayOfStudentFollowScore
     */
    public function setStudentFollowScore(array $studentFollowScore = array())
    {
        $this->StudentFollowScore = $studentFollowScore;

        return $this;
    }

    /**
     * @return array
     */
    public function getStudentFollowScore()
    {
        return $this->StudentFollowScore;
    }
}
