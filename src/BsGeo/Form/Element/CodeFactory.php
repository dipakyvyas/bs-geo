<?php
namespace BsGeo\Form\Element;

use Zend\ServiceManager\FactoryInterface;

class CodeFactory implements FactoryInterface
{

    /*
     * (non-PHPdoc)
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        $select = new Code($serviceLocator->getServiceLocator()->get('bsgeo_options'));
        return $select;
    }
}