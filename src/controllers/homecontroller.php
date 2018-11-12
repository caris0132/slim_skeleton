<?php 
namespace Src\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Src\Controllers\Controller;

/**
 * summary
 */
class HomeController extends Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        
    }
    public function home($ad)
    {
    	echo 'run';
    }
}
 ?>