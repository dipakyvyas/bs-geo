<?php
namespace BsGeo\Form\Element;

use Zend\ServiceManager\FactoryInterface;
use BsGeo\Form\Element\Region;

class RegionFactory implements FactoryInterface
{

    /*
     * (non-PHPdoc)
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        $select = new Region($serviceLocator->getServiceLocator()
            ->get('bsgeo')
            ->getMapper(), 

        $serviceLocator->getServiceLocator('bsgeo_options')->getObjects()['region']);
        return $select;
    }
}