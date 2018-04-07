<?php

namespace RESTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\UserQuotation;
 
class DefaultController extends Controller
{
    /**
     * @Route("/quotations", name="quotations_list")
     * @Method({"GET"});
     */
    public function indexAction(Request $request)
    {
        $quotations = $this->get("doctrine.orm.entity_manager")
        	->getRepository("AppBundle:UserQuotation")
        	->findAll();
        
        $jsonDatas = [];
        
        foreach($quotations as $quotation){
        	$jsonDatas[] = [
        		"id" => $quotation->getId(),
        		"date" => $quotation->getDate(),
        		"infos" => $this->_humanize($quotation->getUserInfos())
        	];
        }
        
        return new JsonResponse($jsonDatas);
    }
    
    /**
     * Retourne les données désérialisées
     * @param string $serializedData
     * @return mixed
     */
    private function _humanize(string $serializedData){
    	return unserialize($serializedData);
    }
}
