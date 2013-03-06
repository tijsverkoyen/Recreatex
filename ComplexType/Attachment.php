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
     * @var string|null $FileName
     */
    protected $FileName;

    /**
     * @param  string|null $bytes
     * @return Attachment
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
     * @param  string|null $fileName
     * @return Attachment
     */
    public function setFileName($fileName)
    {
        $this->FileName = $fileName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }

}
