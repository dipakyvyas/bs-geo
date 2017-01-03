<?php
namespace BsGeo\Form\Element;

use DoctrineModule\Form\Element\ObjectSelect;
use BsGeo\Model\Mapper\MapperInterface;
use BsGeo\Model\Mapper\GeoPlaceInterface;

class County extends ObjectSelect
{

    /**
     *
     * @param MapperInterface $mapper            
     * @param string $targetClass            
     */
    public function __construct(MapperInterface $mapper, $targetClass)
    {
        $this->setName('county');
        $this->setLabel('county');
        //TODO move to config:
        $this->setDisableInArrayValidator(true);
        $this->getProxy()->setObjectManager($mapper->getInstance());
        $this->getProxy()->setTargetClass($targetClass);
        $this->getProxy()->setFindMethod(['name'=>'findBy','params'=>['criteria'=>[],'sort'=>['name'=>'ASC']]]);
    }

    /**
     *
     * @param GeoPlaceInterface $parent            
     */
    public function setParent(GeoPlaceInterface $parent)
    {
        $this->getProxy()->setFindMethod([
            'name' => 'findByParent',
            'params' => [
                'parent' => $parent
            ]
        ]);
    }
    
    public function __sleep(){
        //this is required to override 
    }
 
}