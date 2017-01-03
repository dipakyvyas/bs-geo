<?php
return [
    'hydrators' => [
        'factories' => [
            'BsGeo\Form\Hydrator\UKAddress' => 'BsGeo\Form\Hydrator\UKAddressHydratorFactory'
        ],
        'aliases' => [
            'bsgeo_ukaddress_hydrator' => 'BsGeo\Form\Hydrator\UKAddress'
        ]
    ],
    'service_manager' => [
        'abstract_factories' => [
            'BsGeo\Strategy\AddressStrategyAbstractFactory' => 'BsGeo\Strategy\AddressStrategyAbstractFactory'
        ],
        'invokables' => [
            'BsGeo\Model\Mapper\ODM\Mapper' => 'BsGeo\Model\Mapper\ODM\Mapper'
        ],
        'factories' => [
            'BsGeo\Options\Options' => 'BsGeo\Options\OptionsFactory',
            'BsGeo\Service\Geo' => 'BsGeo\Service\GeoServiceFactory'
        ],
        'aliases' => [
            'bsgeo_odm_mapper' => 'BsGeo\Model\Mapper\ODM\Mapper',
            'bsgeo_options' => 'BsGeo\Options\Options',
            'bsgeo' => 'BsGeo\Service\Geo'
        ]
    ],
    'form_elements' => [
        'factories' => [
            
            'BsGeo\Form\Element\Code' => 'BsGeo\Form\Element\CodeFactory',
            'BsGeo\Form\Element\Town' => 'BsGeo\Form\Element\TownFactory',
            'BsGeo\Form\Element\Street' => 'BsGeo\Form\Element\StreetFactory',
            'BsGeo\Form\Element\County' => 'BsGeo\Form\Element\CountyFactory',
            'BsGeo\Form\Element\Region' => 'BsGeo\Form\Element\RegionFactory',
            'BsGeo\Form\Fieldset\UKAddress' => 'BsGeo\Form\Fieldset\UKAddressFactory'
        ],
        'aliases' => [
            'bsgeo_code_element' => 'BsGeo\Form\Element\Code',
            'bsgeo_town_element' => 'BsGeo\Form\Element\Town',
            'bsgeo_street_element' => 'BsGeo\Form\Element\Street',
            'bsgeo_county_element' => 'BsGeo\Form\Element\County',
            'bsgeo_region_element' => 'BsGeo\Form\Element\Region',
            'bsgeo_ukaddress_fieldset' => 'BsGeo\Form\Fieldset\UKAddress'
        ]
    ],
    'controllers' => [
        'factories' => [
            'BsGeo\Controller\Api' => 'BsGeo\Controller\ApiControllerFactory'
        ]
    ],
    'router' => [
        'routes' => []

        
    ],
    'view_manager' => [
        'template_path_stack' => [
            'BsGeo' => __DIR__ . '/../view'
        ]
    ],
    'doctrine' => [
        'driver' => [
            'odm_driver' => [
                'class' => 'Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver',
                'paths' => [
                    
                    __DIR__ . '/../src/BsGeo/Model/Mapper/ODM/Document'
                ]
            ],
            'odm_default' => [
                'drivers' => [
                    'BsGeo\Model\Mapper\ODM\Document' => 'odm_driver'
                ]
            ]
        ]
    ]
];
