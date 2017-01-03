<?php
namespace BsGeo\Model\Mapper;

interface AddressAbledInterface
{

    /**
     * @return AddressInterface $address
     */
    public function getAddress();

    /**
     * @param AddressInterface $address
     */
    public function setAddress(AddressInterface $address);
}