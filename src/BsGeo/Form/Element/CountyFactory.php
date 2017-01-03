<?php
namespace BsGeo\Form\Element;

use Zend\ServiceManager\FactoryInterface;

class CountyFactory implements FactoryInterface
{

    /*
     * (non-PHPdoc)
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        $select = new County($serviceLocator->getServiceLocator()
            ->get('bsgeo')
            ->getMapper(), 

        $serviceLocator->getServiceLocator()->get('bsgeo_options')->getObjects()['county']);
        return $select;
    }
}