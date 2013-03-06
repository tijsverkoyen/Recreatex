<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class GuiConfigurationValidationResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'GuiConfigurationValidationResult';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $GuiConfiguration
     */
    protected $GuiConfiguration;

    /**
     * @param  string|null                      $guiConfiguration
     * @return GuiConfigurationValidationResult
     */
    public function setGuiConfiguration($guiConfiguration)
    {
        $this->GuiConfiguration = $guiConfiguration;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGuiConfiguration()
    {
        return $this->GuiConfiguration;
    }

}
