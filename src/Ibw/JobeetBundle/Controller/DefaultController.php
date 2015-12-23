<?php

namespace Ibw\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {	
    	$array_test = Array("a","b",
    					"c"=> Array(
    							123,
    							345
    							)	
    				);
    	$arr_test2 = Array('b','d');
    	
    	$users = Array(
    				"Tom" => Array(
    							'age' => 12,
    							'country' => "U.S.A"
    						),
    				"Adam" => Array(
    							'age'=>21,
    							'country' => "Canada"
    						)
    			);
        return $this->render('IbwJobeetBundle:Default:index.html.twig', array('name' => $name
        		,'array_test' => $array_test,
        		'array_test2' => $arr_test2,
        		'bb' => 'bbtest',
        		'escape_test' => "<a href='test'>Test</a>&#33;",
        		'users' => $users
        ));
    }
}
