<?php
namespace BsGeo\Form\Element;

use BsGeo\Model\Mapper\MapperInterface;
use Zend\Form\Element\Text;
use BsGeo\Options\Options;

class Street extends Text
{
    /**
     * @param MapperInterface $mapper
     * @param string $targetClass
     */
    public function __construct(Options $options)
    {
        $this->setName('street');
        $this->setLabel('street');
        
    }
    
}