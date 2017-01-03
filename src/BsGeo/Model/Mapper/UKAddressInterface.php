<?php
namespace BsGeo\Model\Mapper;


interface UKAddressInterface extends AddressInterface
{

    /**
     *
     * @return GeoPlaceInterface $town
     */
    public function getTown();

    /**
     *
     * @param GeoPlaceInterface $town            
     */
    public function setTown(GeoPlaceInterface $town);

    /**
     *
     * @return GeoPlaceInterface $county
     */
    public function getCounty();

    /**
     *
     * @param GeoPlaceInterface $county            
     */
    public function setCounty(GeoPlaceInterface $county);

    /**
     *
     * @return GeoPlaceInterface $region
     */
    public function getRegion();

    /**
     *
     * @param GeoPlaceInterface $region            
     */
    public function setRegion(GeoPlaceInterface $region);

    /**
     * @return string
     */
    public function getCountyName();

    /**
     * @param string $name
     */
    public function setCountyName($name);

    /**
     * @return string
     */
    public function getRegionName();

    /**
     * @param string $name
     */
    public function setRegionName($name);
}