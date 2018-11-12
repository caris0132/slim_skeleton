<?php 

namespace Src\Controllers;

use Slim\Container;

/**
 * summary
 */
class Controller
{
	var $container;
    /**
     * summary
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function __get($var)
    {
    	return $this->container->{$var};
    }
}
 ?>