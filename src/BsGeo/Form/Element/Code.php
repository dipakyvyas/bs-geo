<?php
namespace BsGeo\Form\Element;

use BsGeo\Model\Mapper\MapperInterface;
use Zend\Form\Element\Text;
use BsGeo\Options\Options;

class Code extends Text
{
    /**
     * @param MapperInterface $mapper
     * @param string $targetClass
     */
    public function __construct(Options $options)
    {
        $this->setName('code');
        $this->setLabel('post code');
        
    }
    
}