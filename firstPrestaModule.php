<?php



/**
* ======================= DEPLACER DANS LE BOOTSTRAP DES TESTS =========================
* ============     Ci dessous le code du module firstPrestaModule       ================
* ============     qui est implémenté petit à petit à l'aide de tests   ================
* ============     utilisant les librairies PHPUnit (v3.4) !!!          ================
*
* ================= Ce fichier ne devrait comporter que ce qui suit ====================
*/




/* ======= Module firstPrestaModule ===== */
class firstPrestaModule extends Module {
	
	function __construct(){
		$this -> version = '0.1.0';
		$this -> name = 'firstPrestaModule';
		$this -> description = $this->l('mon premier presta module');
		parent::__construct();
	}
}
