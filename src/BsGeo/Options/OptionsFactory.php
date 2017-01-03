<?php
namespace BsGeo\Options;

use Zend\ServiceManager\FactoryInterface;
class OptionsFactory implements FactoryInterface
{
 /* (non-PHPdoc)
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        $config=$serviceLocator->get('config');
        return new Options($config['bsgeo']);
        
    }

}