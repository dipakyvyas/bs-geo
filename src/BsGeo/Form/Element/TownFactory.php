<?php
namespace BsGeo\Form\Element;

use Zend\ServiceManager\FactoryInterface;

class TownFactory implements FactoryInterface
{

    /*
     * (non-PHPdoc)
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        $select = new Town($serviceLocator->getServiceLocator()
            ->get('bsgeo')
            ->getMapper(), 

        $serviceLocator->getServiceLocator()->get('bsgeo_options')->getObjects()['town']);
        
        return $select;
    }
}