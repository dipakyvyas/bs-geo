<?php
namespace BsGeo\Form\Hydrator;

use DoctrineModule\Stdlib\Hydrator\DoctrineObject;
use Doctrine\Common\Persistence\ObjectManager;
use BsGeo\Model\Mapper\UKAddressInterface;

class UKAddressHydrator extends DoctrineObject
{

    /**
     *
     * @param ObjectManager $objectManager            
     */
    public function __construct(ObjectManager $objectManager)
    {
        parent::__construct($objectManager);
    }

    /*
     * (non-PHPdoc)
     * @see \DoctrineModule\Stdlib\Hydrator\DoctrineObject::extract()
     */
    public function extract($object)
    {
        if (! $object instanceof UKAddressInterface) {
            throw new HydratorException('Invalid object, must implement UKAddressInterface');
        }
        
        //$this->fieldset->getTown()->setParent($object->getCounty());
        //$this->fieldset->getTown()->setValue($object->getTown());
        $data = parent::extract($object);
        return $data;
    }

    /*
     * (non-PHPdoc)
     * @see \DoctrineModule\Stdlib\Hydrator\DoctrineObject::hydrate()
     */
    public function hydrate(array $data, $object)
    {
        if (! $object instanceof UKAddressInterface) {
            throw new HydratorException('Invalid object, must implement UKAddressInterface');
        }
        
        $object = parent::hydrate($data, $object);
        
        return $object;
    }


}