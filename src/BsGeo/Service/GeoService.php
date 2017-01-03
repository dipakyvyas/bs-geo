<?php
namespace BsGeo\Service;

use BsGeo\Options\Options;
use BsBase\Model\Mapper\MapperInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorAwareTrait;
use BsGeo\Model\Mapper\GeoPlaceInterface;
use BsGeo\Strategy\AddressStrategyInterface;

class GeoService implements ServiceLocatorAwareInterface
{
    
    use ServiceLocatorAwareTrait;

    private $options;

    private $mapper;

    public function __construct(Options $options, MapperInterface $mapper)
    {
        $this->options = $options;
        $this->mapper = $mapper;
    }

    /**
     *
     * @return AddressStrategyInterface
     */
    private function getStrategy()
    {
        return $this->getServiceLocator()->get('BsGeo\Strategy\AddressStrategyAbstractFactory');
    }

    /**
     *
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    private function getAddressRepository()
    {
        return $this->getMapper()->getRepository($this->getStrategy()
            ->getAddressObject());
    }

    /**
     *
     * @return Options
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     *
     * @return MapperInterface
     */
    public function getMapper()
    {
        return $this->mapper;
    }

    /**
     *
     * @param mixed $parent            
     */
    public function getPlacesByParent($parent, $class = null, $objects = true)
    {
        if (! $parent instanceof GeoPlaceInterface) {
            
            throw new \Exception('Not yet supported');
        }
        $repository = $this->getMapper()->getRepository($class);
        $flags = [];
        
        if (! $objects) {
            $flags[] = GeoPlaceInterface::GEO_PLACE_ID_NAME_PAIR;
        }
        
        return $repository->findByParent($parent, $flags);
    }
}