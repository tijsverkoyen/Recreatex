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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var StudentFollowScore[] $StudentFollowScore
     */
    protected $StudentFollowScore = array();

    /**
     * @param  StudentFollowScore[]      $studentFollowScore
     * @return ArrayOfStudentFollowScore
     */
    public function setStudentFollowScore(array $studentFollowScore = array())
    {
        $this->StudentFollowScore = $studentFollowScore;

        return $this;
    }

    /**
     * @return StudentFollowScore[]
     */
    public function getStudentFollowScore()
    {
        return $this->StudentFollowScore;
    }

}
