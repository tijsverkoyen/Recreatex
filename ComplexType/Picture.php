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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Bytes
     */
    protected $Bytes;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ContentType
     */
    protected $ContentType;

    /**
     * @param  string|null $bytes
     * @return Picture
     */
    public function setBytes($bytes)
    {
        $this->Bytes = $bytes;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBytes()
    {
        return $this->Bytes;
    }

    /**
     * @param  string|null $contentType
     * @return Picture
     */
    public function setContentType($contentType)
    {
        $this->ContentType = $contentType;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContentType()
    {
        return $this->ContentType;
    }
}
