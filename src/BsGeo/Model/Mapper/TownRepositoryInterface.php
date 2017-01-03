<?php
namespace BsGeo\Model\Mapper;

interface TownRepositoryInterface
{
    public function findByParent(GeoPlaceInterface $county);
}