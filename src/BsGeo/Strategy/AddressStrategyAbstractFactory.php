<?php
namespace BsGeo\Strategy;

use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\EventManager\EventManagerAwareInterface;
use Zend\EventManager\EventManagerAwareTrait;

class AddressStrategyAbstractFactory implements AbstractFactoryInterface, EventManagerAwareInterface
{
    use EventManagerAwareTrait;

    /*
     * (non-PHPdoc)
     * @see \Zend\ServiceManager\AbstractFactoryInterface::canCreateServiceWithName()
     */
    public function canCreateServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $fullName = __NAMESPACE__ . '\\' . $requestedName;
        $match = (fnmatch('*AddressStrategy', $requestedName) && class_exists($fullName) && in_array(__NAMESPACE__ . '\\AddressStrategyInterface', class_implements($fullName)));
        
        return $match;
    }

    /*
     * (non-PHPdoc)
     * @see \Zend\ServiceManager\AbstractFactoryInterface::createServiceWithName()
     */
    public function createServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $fullName = __NAMESPACE__ . '\\' . $requestedName;
        if (class_exists($fullName)) {
            
            $fieldsetServiceName = (string) call_user_func(array(
                $fullName,
                'getFieldsetService'
            ));
            
            if (! $serviceLocator->get('form_element_manager')->has($fieldsetServiceName)) {
                throw new ServiceNotFoundException('A service with name $fieldsetServiceName could not be found');
            }
            
            $fieldset = $serviceLocator->get('form_element_manager')->get($fieldsetServiceName);
            
            $strategy = new $fullName($fieldset);
            $this->getEventManager()->trigger('createService', $strategy);
            
            return  $strategy;
        }
    }
}