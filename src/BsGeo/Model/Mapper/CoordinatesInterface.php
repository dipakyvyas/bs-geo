<?php
namespace BsGeo\Model\Mapper;

interface CoordinatesInterface
{

    public function getLatitude();

    public function getLongitude();

    public function setLatitude($latitude);

    public function setLongitude($longitude); 
}