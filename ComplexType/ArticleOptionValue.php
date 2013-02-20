<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArticleOptionValue extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArticleOptionValue';

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Value;

    /**
     * @param  SimpleType\Guid|null $id
     * @return ArticleOptionValue
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
     * @param  string|null        $value
     * @return ArticleOptionValue
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
}
