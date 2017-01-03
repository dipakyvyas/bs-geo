<?php
namespace BsGeo\Model\Mapper;

use BsBase\Model\Mapper\BsObjectInterface;
interface AddressInterface extends BsObjectInterface
{
    public function getStreet();
    
    public function setStreet($street);
    
    public function getTownName();
    
    public function setTownName($townName);
    
    public function getCode();
    
    public function setCode($code);
    
}