<?php
namespace BsGeo\Form\Fieldset;

use Zend\Form\Fieldset;
use BsGeo\Form\Element\Street;
use BsGeo\Form\Element\Town;
use BsGeo\Form\Element\County;
use BsGeo\Form\Element\Region;
use BsGeo\Form\Element\Code;
use BsGeo\Model\Mapper\UKAddressInterface;
use BsGeo\Form\Hydrator\UKAddressHydrator;

class UKAddress extends Fieldset
{

    private $street;

    private $town;

    private $county;

    private $region;

    private $code;

    /**
     *
     * @param Street $street            
     * @param Town $town            
     * @param County $county            
     * @param Region $region            
     * @param Code $code            
     */
    public function __construct(UKAddressInterface $object, UKAddressHydrator $hydrator, Street $street = null, Town $town = null, County $county = null, Region $region = null, Code $code = null)
    {
        parent::__construct();
        $this->setHydrator($hydrator);
        $this->setObject($object);
        $this->street = $street;
        $this->town = $town;
        $this->county = $county;
        $this->region = $region;
        $this->code = $code;
        
        $this->setName('address');
        $this->setLabel('address');
        
        if ($this->street) {
            $this->add($this->street);
        }
        
        if ($this->region) {
            $this->add($this->region);
        }
        
        if ($this->county) {
            $this->add($this->county);
        }
        
        if ($this->town) {
            $this->add($this->town);
        }
        
        if ($this->code) {
            $this->add($this->code);
        }
    }

    /* (non-PHPdoc)
     * @see \Zend\Form\Fieldset::populateValues()
     */
    public function populateValues($data)
    {
        parent::populateValues($data);
        if ($this->county->getValue()) {
            $county = $this->county->getProxy()
                ->getObjectManager()
                ->getRepository($this->county->getProxy()
                ->getTargetClass())
                ->find($this->county->getValue());
            
            $this->town->setParent($county);
        }
    }

    /**
     *
     * @return Street $street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     *
     * @return Town $town
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     *
     * @return County $county
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     *
     * @return Region $region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     *
     * @return Code $code
     */
    public function getCode()
    {
        return $this->code;
    }
}