<?php
namespace BsGeo\Model\Mapper;

use BsGeo\Model\Mapper\GeoPlaceInterface;

interface PlaceRepositoryInterface
{

    public function findByParent(GeoPlaceInterface $place,array $flags=array());
}