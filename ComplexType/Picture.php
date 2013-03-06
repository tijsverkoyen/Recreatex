<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Picture extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Picture';

    /**
     * @var string
     */
    protected $Bytes;

    /**
     * @var string
     */
    protected $ContentType;

    /**
     * @param  string[optional] $bytes
     * @return Picture
     */
    public function setBytes($bytes)
    {
        $this->Bytes = $bytes;

        return $this;
    }

    /**
     * @return string
     */
    public function getBytes()
    {
        return $this->Bytes;
    }

    /**
     * @param  string[optional] $contentType
     * @return Picture
     */
    public function setContentType($contentType)
    {
        $this->ContentType = $contentType;

        return $this;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->ContentType;
    }
}
