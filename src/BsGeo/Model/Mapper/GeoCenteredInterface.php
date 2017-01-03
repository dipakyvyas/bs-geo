<?php
namespace BsGeo\Model\Mapper;



use BsGeo\Model\Mapper\CoordinatesInterface;
/**
 * Generic interface for objects with a single point (lat/long)
 * 
 * @author mat wright<mat@bstechnologies.com>
 * @copyright BS Technologies SARL
 * @package BsGeo
 */
interface GeoCenteredInterface
{

    /**
     *
     * @return CoordinatesInterface $coordinates
     */
    public function getCoordinates();

    /**
     *
     * @param CoordinatesInterface $coordinates            
     */
    public function setCoordinates(CoordinatesInterface $coordinates);
    
    
    
   
    
}