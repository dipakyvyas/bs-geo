<?php
namespace BsGeo\Model\Mapper\ODM\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/**
 * @author matwright
 * @ODM\EmbeddedDocument
 */
class UKAddress extends AbstractUKAddress
{

    /**
     * @ODM\Field(type="string")
     */
    protected $town;

    /**
     * @ODM\Field(type="string")
     */
    protected $county;

    /**
     * @ODM\Field(type="string")
     */
    protected $region;
    
    

}