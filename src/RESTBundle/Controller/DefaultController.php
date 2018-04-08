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
     * Retourne la collection des demandes de quotation
     * @param Request $request Paramètres de la requête HTTP
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
        	$user = null;
        	$feature = null;
        	
        	$user = UserInfo::getUserInfo($quotation->getUserInfos());
        	
        	if($user->isChecked()){
        		$feature = FeatureInfo::getFeatureInfo($quotation->getText());
        		if($feature->isChecked()){
        			$jsonDatas[] = [
        					"id" => $quotation->getId(),
        					"date" => $quotation->getDate(),
        					"user" => $user->toArray(),
        					"features" => $feature->toArray()
        			];
        		}
        	}
        }
        
        return new JsonResponse($jsonDatas);
    }
    
    /**
     * Récupère une demande quotation
     * @param Request $request
     * @Route("/quotations/{quotation_id}", name="quotation")
     * @Method({"GET"})
     */
    public function getQuotation(Request $request){
    	$quotation = $this->get("doctrine.orm.entity_manager")
    		->getRepository("AppBundle:UserQuotation")
    		->find($request->get("quotation_id"));
    	
    	$jsonDatas = [];
    	
    	$user = null;
    	$feature = null;
    	
    	$user = UserInfo::getUserInfo($quotation->getUserInfos());
    	
    	if($user->isChecked()){
    		$feature = FeatureInfo::getFeatureInfo($quotation->getText());
    		if($feature->isChecked()){
    			$jsonDatas[] = [
    					"id" => $quotation->getId(),
    					"date" => $quotation->getDate(),
    					"user" => $user->toArray(),
    					"features" => $feature->toArray()
    			];
    		}
    	}
    	
    	return new JsonResponse($jsonDatas);
    }
}
