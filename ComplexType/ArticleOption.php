<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArticleOption extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArticleOption';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Code
     */
    protected $Code;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

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
     * @var ArrayOfArticleOptionValue|null $PossibleValues
     */
    protected $PossibleValues;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Sequence
     */
    protected $Sequence;

    /**
     * @param  string|null   $code
     * @return ArticleOption
     */
    public function setCode($code)
    {
        $this->Code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param  string|null   $description
     * @return ArticleOption
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  SimpleType\guid|null $id
     * @return ArticleOption
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
     * @param  ArrayOfArticleOptionValue|null $possibleValues
     * @return ArticleOption
     */
    public function setPossibleValues(ArrayOfArticleOptionValue $possibleValues = null)
    {
        $this->PossibleValues = $possibleValues;

        return $this;
    }

    /**
     * @return ArrayOfArticleOptionValue|null
     */
    public function getPossibleValues()
    {
        return $this->PossibleValues;
    }

    /**
     * @param  integer|null  $sequence
     * @return ArticleOption
     */
    public function setSequence($sequence)
    {
        $this->Sequence = $sequence;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getSequence()
    {
        return $this->Sequence;
    }

}
