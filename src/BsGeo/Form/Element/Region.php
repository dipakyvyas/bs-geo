<?php
namespace BsGeo\Form\Element;

use DoctrineModule\Form\Element\ObjectSelect;
use BsGeo\Model\Mapper\MapperInterface;
use BsGeo\Model\Mapper\GeoPlaceInterface;

class Region extends ObjectSelect
{
    /**
     * @param MapperInterface $mapper
     * @param string $targetClass
     */
    public function __construct(MapperInterface $mapper, $targetClass)
    {
        $this->setName('region');
        $this->setLabel('region');
        
        $this->getProxy()->setObjectManager($mapper->getInstance());
        $this->getProxy()->setTargetClass($targetClass);
    }
    
    /**
     * @param GeoPlaceInterface $parent
     */
    public function setParent(GeoPlaceInterface $parent){
        $this->getProxy()->setFindMethod(['name'=>'findByParent','params'=>['parent'=>$parent]]);
    }
}