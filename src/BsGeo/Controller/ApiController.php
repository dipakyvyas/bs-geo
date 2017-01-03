<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/BsGeo for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace BsGeo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use BsGeo\Service\GeoService;

class ApiController extends AbstractActionController
{

    private $geoService;

    public function __construct(GeoService $geoService)
    {
        $this->geoService = $geoService;
    }

    /**
     * 
     * @return multitype:
     */
    public function placesAction()
    {
        
        return array();
    }
}
