<?php
namespace BsGeo\Model\Mapper;

/**
 * Generic interface for places
 * 
 * @author matwright
 *        
 */
interface GeoPlaceInterface
{

    const GEO_PLACE_ID_NAME_PAIR=1;
    
    /**
     *
     * @return mixed
     */
    public function getId();

    /**
     *
     * @return string
     */
    public function getName();

    /**
     *
     * @param string $name            
     */
    public function setName($name);

    /**
     *
     * @return GeoPlaceInterfaceInterface $parent
     */
    public function getParent();

    /**
     *
     * @param GeoPlaceInterfaceInterface $parent            
     */
    public function setParent(GeoPlaceInterface $parent);
    
}