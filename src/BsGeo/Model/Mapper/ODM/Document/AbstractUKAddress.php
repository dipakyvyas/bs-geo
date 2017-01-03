<?php
namespace BsGeo\Model\Mapper\ODM\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use BsGeo\Model\Mapper\UKAddressInterface;
use BsGeo\Model\Mapper\RegionInterface;
use BsGeo\Model\Mapper\CountyInterface;
use BsGeo\Model\Mapper\TownInterface;
use BsGeo\Model\Mapper\GeoPlaceInterface;
use BsBase\Model\Mapper\ODM\Document\AbstractDocument;

/**
 * UK Address Document
 *
 * Concrete class should annote town/county/region fields, define indexes, etc.
 *
 * @author matwright
 *         @ODM\MappedSuperclass
 */
abstract class AbstractUKAddress extends AbstractDocument implements UKAddressInterface
{

    /**
     * @ODM\Field(type="string")
     */
    private $street;

    /**
     * @ODM\Field(type="string")
     */
    private $townName;

    /**
     * @ODM\Field(type="string")
     */
    private $code;

    /**
     * @ODM\Field(type="string")
     */
    private $countyName;

    /**
     * @ODM\Field(type="string")
     */
    private $regionName;

    /**
     *
     * @return GeoPlaceInterface $town
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     *
     * @return GeoPlaceInterface $county
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     *
     * @return GeoPlaceInterface $region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     *
     * @param string $regionName
     */
    public function setRegionName($regionName)
    {
        $this->regionName = $regionName;
    }

    /**
     *
     * @param TownInterface $town
     */
    public function setTown(GeoPlaceInterface $town)
    {
        $this->town = $town;
    }

    /**
     *
     * @param CountyInterface $county
     */
    public function setCounty(GeoPlaceInterface $county)
    {
        $this->county = $county;
    }

    /**
     *
     * @param RegionInterface $region
     */
    public function setRegion(GeoPlaceInterface $region)
    {
        $this->region = $region;
    }

    /**
     *
     * @return string $street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     *
     * @return string $townName
     */
    public function getTownName()
    {
        return $this->townName;
    }

    /**
     *
     * @return string $code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     *
     * @return string $countyName
     */
    public function getCountyName()
    {
        return $this->countyName;
    }

    /**
     *
     * @return string $regionName
     */
    public function getRegionName()
    {
        return $this->regionName;
    }

    /**
     *
     * @return string $country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     *
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     *
     * @param string $townName
     */
    public function setTownName($townName)
    {
        $this->townName = $townName;
    }

    /**
     *
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     *
     * @param string $countyName
     */
    public function setCountyName($countyName)
    {
        $this->countyName = $countyName;
    }

    /**
     * @return string
     */
    public function __toString(){
        return $this->getStreet().', '.$this->getTownName().' ,'.$this->getCountyName();
    }
}