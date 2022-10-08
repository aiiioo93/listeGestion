<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application pgsp
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdogestionListe qui contiendra l'unique instance de la classe
 */

class PdogestionListe
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=gestionListe';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoPgsp = null;
		
		
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
        self::$monPdo = new PDO(self::$serveur.';'.self::$bdd, self::$user, self::$mdp); 
        self::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		self::$monPdo = null;
	}

	
	public  static function getPdogestionListe()
	{
		if(self::$monPdoPgsp == null)
		{
			self::$monPdoPgsp = new PdogestionListe();
		}
		return self::$monPdoPgsp;  
	}



} // fin classe 
	

	




?>
