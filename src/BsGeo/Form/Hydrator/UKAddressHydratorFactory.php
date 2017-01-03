<?php
namespace BsGeo\Form\Hydrator;

use Zend\ServiceManager\FactoryInterface;

class UKAddressHydratorFactory implements FactoryInterface
{

    /*
     * (non-PHPdoc)
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        $objectManager = $serviceLocator->getServiceLocator()
            ->get('bsgeo')
            ->getMapper()
            ->getInstance();
        return new UKAddressHydrator($objectManager);
    }
}