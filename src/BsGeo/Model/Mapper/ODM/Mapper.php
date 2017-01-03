<?php
namespace BsGeo\Model\Mapper\ODM;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use BsGeo\Model\Mapper\MapperInterface;

class Mapper implements ServiceLocatorAwareInterface, MapperInterface
{
    use \Zend\ServiceManager\ServiceLocatorAwareTrait,\BsBase\Model\Mapper\ODM\ODMMapperTrait;


}