<?php
namespace BsGeo\Strategy;

use Zend\Form\FieldsetInterface;

/**
 * @author matwright
 *
 */
interface AddressStrategyInterface
{

    /**
     *
     * @return FieldsetInterface
     */
    public function getFieldset();
    
    /**
     *
     * @return string
     */
    public static function getFieldsetService();
    
    public function getAddressObject();
}