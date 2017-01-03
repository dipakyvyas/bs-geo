<?php
namespace BsGeo\Options;

use Zend\Stdlib\AbstractOptions;

class Options extends AbstractOptions
{

    private $mapper;

    private $objects;

    /**
     *
     * @return array $objects
     */
    public function getObjects()
    {
        return $this->objects;
    }

    /**
     *
     * @param array $objects            
     */
    public function setObjects(array $objects)
    {
        $this->objects = $objects;
    }

    /**
     *
     * @return string $mapper
     */
    public function getMapper()
    {
        return $this->mapper;
    }

    /**
     *
     * @param string $mapper            
     */
    public function setMapper($mapper)
    {
        $this->mapper = $mapper;
    }
}