<?php
namespace BsGeo\Strategy;

use BsGeo\Form\Fieldset\UKAddress;

class UKAddressStrategy implements AddressStrategyInterface
{

    const UK_ADDRESS_FIELDSET_SERVICE = 'bsgeo_ukaddress_fieldset';
    
    const UK_ADDRESS_OBJECT = 'UKAddress';

    private $fieldset;
    
    private $object;

    /**
     *
     * @param UKAddress $fieldset            
     */
    public function __construct(UKAddress $fieldset)
    {
        $this->fieldset = $fieldset;
    }
    
    /**
     *
     * @return string
     */
    public function getAddressObject()
    {
        return self::UK_ADDRESS_OBJECT;
    }

    /**
     *
     * @return string
     */
    public static function getFieldsetService()
    {
        return self::UK_ADDRESS_FIELDSET_SERVICE;
    }

    /*
     * (non-PHPdoc)
     * @see \BsGeo\Strategy\AddressStrategyInterface::getFieldset()
     */
    public function getFieldset()
    {
        return $this->fieldset;
    }
}