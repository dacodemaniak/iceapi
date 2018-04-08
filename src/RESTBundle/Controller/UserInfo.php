<?php
/**
* @name UserInfo Services pour la récupération "propre" des données utilisateurs
* @author IDea Factory (dev-team@ideafactory.fr) - Avr. 2018
* @package RESTBundle\Controller
* @version 0.0.1
*/
namespace RESTBundle\Controller;

class UserInfo {
	/**
	 * Données brutes à partir de l'entité
	 * @var Object
	 */
	private $infos;
	
	/**
	 * Mapping de données
	 * @var array
	 */
	private $mapper = [];
	
	/**
	 * Attributs requis pour la récupération
	 * @var array
	 */
	private $required = [];
	
	/**
	 * Statut d'intégrité de l'objet
	 * @var boolean
	 */
	private $integrityChecked = true;
	
	
	private function __construct(string $userInfos){
		$this->infos = unserialize($userInfos);
		
		$this->mapper = [
			"Nom" => "nom",
			"Prénom" => "prenom",
			"Mail" => "mail",
			"Téléphone" => "telephone",
			"Adresse" => "adresse",
			"Code postal" => "codePostal",
			"Ville" => "ville",
			"Prix de vente" => "prixDeVente",
			"Commentaire" => "commentaire"
		];
		
		$this->required = [
			"nom",
			"prenom",
			"mail",
			"telephone",
			"adresse",
			"codePostal",
			"ville",
			"prixDeVente"
		];
		
		$this->_map();
		
		
	}
	
	/**
	 * Retourne le statut d'intégrité de l'objet courant
	 * @return boolean
	 */
	public function isChecked(){
		return $this->integrityChecked;
	}
	
	/**
	 * Retourne l'objet sous forme de tableau associatif
	 * @return array
	 */
	public function toArray(): array {
		$associative = [];
		
		foreach($this->mapper as $attribute => $value){
			$associative[$value] = $this->{$value}; 
		}
		
		return $associative;
	}
	
	/**
	 * Instancie la classe courante à partir des données sérialisées
	 * @param string $userInfos
	 * @return \RESTBundle\Controller\UserInfo
	 */
	public static function getUserInfo(string $userInfos): UserInfo{
		return new UserInfo($userInfos);
	}
	
	/**
	 * Affecte la valeur à l'attribut dynamique
	 * @param string $attribute
	 * @param string $value
	 * @return UserInfo
	 */
	private function __set(string $attribute, string $value): UserInfo{
		if(!property_exists($this, $attribute)){
			$this->{$attribute} = $value;
		}
		return $this;
	}
	
	/**
	 * Retourne la valeur d'un attribut dynamique
	 * @param string $attribute
	 * @return mixed
	 */
	private function __get(string $attribute) {
		if(!property_exists($this, $attribute)){
			return $this->{$attribute};
		}
		
		return null;
	}
	
	/**
	 * Mappe les données sérialisées vers l'objet courant
	 * Détermine le statut d'intégrité 
	 */
	private function _map(){
		$mapped = [];
		$integrity = array_values($this->mapper);
		
		foreach($this->infos as $property => $value){
			if(strpos($property, "*") != 0){
				// Retire l'étoile "obligatoire"
				$property = substr($property, 0, strlen($property) - 2);
			}
			$this->{$this->mapper[$property]} = $value;
			$mapped[] = $this->mapper[$property];
		}
		
		$this->integrityChecked = count(array_diff($integrity, $mapped)) == 0 ? true : false;
	}
}