<?php
namespace BsGeo\Model\Mapper;

use Doctrine\Common\Collections\Collection;
interface MultiAddressableInterface
{

    /**
     * @return Collection
     */
    public function getAddress();

    /**
     * @param AddressInterface $address
     */
    public function addAddress(AddressInterface $address);
    
    /**
     * @param AddressInterface $address
     */
    public function removeAddress(AddressInterface $address);
}