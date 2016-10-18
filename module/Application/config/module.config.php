<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'news' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/news',
                    'defaults' => array(
                        'controller' => 'Application\Controller\News',
                        'action'     => 'index',
                    ),
                ),
            ),
    		'about' => array(
    		    'type' => 'Zend\Mvc\Router\Http\Literal',
    		    'options' => array(
    		        'route'    => '/about',
    		        'defaults' => array(
    		            'controller' => 'Application\Controller\About',
    		            'action'     => 'index',
    		        ),
    		    ),
    		),
    		'kontakt' => array(
    		    'type' => 'Zend\Mvc\Router\Http\Literal',
    		    'options' => array(
    		        'route'    => '/kontakt',
    		        'defaults' => array(
    		            'controller' => 'Application\Controller\Kontakt',
    		            'action'     => 'index',
    		        ),
    		    ),
    		),
    		'impressum' => array(
    		    'type' => 'Zend\Mvc\Router\Http\Literal',
    		    'options' => array(
    		        'route'    => '/impressum',
    		        'defaults' => array(
    		            'controller' => 'Application\Controller\Impressum',
    		            'action'     => 'index',
    		        ),
    		    ),
    		),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => 'Application\Controller\IndexController',
    		'Application\Controller\News' => 'Application\Controller\NewsController',
    		'Application\Controller\About' => 'Application\Controller\AboutController',
    		'Application\Controller\Kontakt' => 'Application\Controller\KontaktController',
    		'Application\Controller\Impressum' => 'Application\Controller\ImpressumController'
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
