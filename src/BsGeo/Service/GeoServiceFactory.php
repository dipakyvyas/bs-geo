<?php
namespace BsGeo\Service;

use Zend\ServiceManager\FactoryInterface;
class GeoServiceFactory implements FactoryInterface
{
 /* (non-PHPdoc)
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        $options=$serviceLocator->get('bsgeo_options');
        if($serviceLocator->has($options->getMapper())){
            $mapper=$serviceLocator->get($options->getMapper());
        }else{
            $mapperClass=$options->getMapper();
            $mapper=new $mapperClass;
        }
        return new GeoService($options, $mapper);
        
    }

}