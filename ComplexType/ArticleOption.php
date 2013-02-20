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
     * @var string
     */
    protected $Code;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var ArrayOfArticleOptionValue
     */
    protected $PossibleValues;

    /**
     * @var integer
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
     * @param  SimpleType\Guid|null $id
     * @return ArticleOption
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
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
