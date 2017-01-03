<?php
namespace BsGeo\Form\Element;

use Zend\ServiceManager\FactoryInterface;

class StreetFactory implements FactoryInterface
{

    /*
     * (non-PHPdoc)
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        $select = new Street($serviceLocator->getServiceLocator()->get('bsgeo_options'));
        return $select;
    }
}