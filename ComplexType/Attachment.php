<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Attachment extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Attachment';

    /**

     * @var string
     */
    protected $Bytes;

    /**

     * @var string
     */
    protected $FileName;

    /**
     * @param  string[optional] $bytes
     * @return Attachment
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
     * @param  string[optional] $fileName
     * @return Attachment
     */
    public function setFileName($fileName)
    {
        $this->FileName = $fileName;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }
}
