<?php
namespace BsGeo\Model\Mapper\ODM\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use BsGeo\Model\Mapper\CoordinatesInterface;

/**
 *
 * @author matwright
 *         @ODM\EmbeddedDocument
 *         @ODM\Index(keys={"loc"="2dsphere"})
 */
class Coordinates2dSphere implements CoordinatesInterface
{

    /**
     *
     * @var array @ODM\Hash
     */
    private $loc;
    
    public function __construct(){
        $this->loc=[
            'type'=>'Point',
            'coordinates'=>[0.00,0.00]
        ];
    }

    /**
     *
     * @return array $loc
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     *
     * @param array $loc            
     */
    public function setLoc(array $loc)
    {
        $this->loc = $loc;
    }

    /*
     * (non-PHPdoc)
     * @see \BsGeo\Model\CoordinatesInterface::getLatitude()
     */
    public function getLatitude()
    {
        return $this->loc['coordinates'][1];
    }

    /*
     * (non-PHPdoc)
     * @see \BsGeo\Model\CoordinatesInterface::getLongitude()
     */
    public function getLongitude()
    {
        return $this->loc['coordinates'][0];
    }

    /*
     * (non-PHPdoc)
     * @see \BsGeo\Model\CoordinatesInterface::setLatitude()
     */
    public function setLatitude($latitude)
    {
        $this->loc['coordinates'] = [$this->getLongitude(),$latitude];
    }

    /*
     * (non-PHPdoc)
     * @see \BsGeo\Model\CoordinatesInterface::setLongitude()
     */
    public function setLongitude($longitude)
    {
        $this->loc['coordinates'] = [$longitude,$this->getLatitude()];
    }
}