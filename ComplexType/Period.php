<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Period extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Period';

    /**
     * @var string
     */
    protected $From;

    /**
     * @var string
     */
    protected $Until;

    /**
     * @param  string|null $from
     * @return Period
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  string|null $until
     * @return Period
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUntil()
    {
        return $this->Until;
    }
}
