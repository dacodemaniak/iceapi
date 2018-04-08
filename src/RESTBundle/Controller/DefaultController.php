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
}
