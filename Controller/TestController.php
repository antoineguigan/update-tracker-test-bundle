<?php
namespace Qimnet\UpdateTrackerTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
    /**
     * @Route("/cache-fragment-test/{value}")
     * @Template
     */
    public function testAction($value)
    {
        return array(
            'value'=>$value
        );
    }
    
    /**
     * 
     */
    public function fragmentAction($value)
    {
        return new Response($value);
    }
    
}

?>
