<?php
namespace BsGeo\Form\Element;

use DoctrineModule\Form\Element\ObjectSelect;
use BsGeo\Model\Mapper\MapperInterface;
use BsGeo\Model\Mapper\GeoPlaceInterface;

class Town extends ObjectSelect
{

    /**
     *
     * @param MapperInterface $mapper            
     * @param string $targetClass            
     */
    public function __construct(MapperInterface $mapper, $targetClass)
    {
        $this->setName('town');
        $this->setLabel('town');
        //TODO move to config:
        $this->setDisableInArrayValidator(true);
        $this->getProxy()->setObjectManager($mapper->getInstance());
        $this->getProxy()->setTargetClass($targetClass);
        $this->getProxy()->setFindMethod([
            'name' => 'findByName',
            'params' => [
                'name' => '___'
            ]
        ]);
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
}