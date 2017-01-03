<?php
namespace BsGeo\Form\Fieldset;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class UkAddressFactory implements FactoryInterface
{

    /*
     * (non-PHPdoc)
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $mapper = $serviceLocator->getServiceLocator()
            ->get('bsgeo')
            ->getMapper();
        $objectClass = $mapper->getObject('UKAddress');
        $objects = $serviceLocator->getServiceLocator()
            ->get('bsgeo_options')
            ->getObjects();
        
        $town = $county = $region = null;
        
        $street = $serviceLocator->get('bsgeo_street_element');
        if ($objects['town']) {
            $town = $serviceLocator->get('bsgeo_town_element');
        }
        if ($objects['county']) {
            $county = $serviceLocator->get('bsgeo_county_element');
        }
        if ($objects['region']) {
            $region = $serviceLocator->get('bsgeo_region_element');
        }
        $code = $serviceLocator->get('bsgeo_code_element');
        
        $hydrator=$serviceLocator->getServiceLocator()->get('HydratorManager')->get('bsgeo_ukaddress_hydrator');
        $fieldset=new UKAddress($objectClass,$hydrator, $street, $town, $county, $region, $code);

        return $fieldset;
    }
}