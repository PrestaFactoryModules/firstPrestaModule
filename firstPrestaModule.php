<?php

/**
 * NE DEVRAIT PAS ETRE DANS CE FICHIER !
 * les déclarations ci-dessous ne devraient pas se trouver ici ...
 * Quelques petits problème d'__autoload à corriger pour palier à ce contretemps ! :)
 */

define('CLASS_DIR','/var/www/prestashop/classes');
define ('CONFIG_DIR','/var/www/prestashop/config');
define('PHPUNIT_DIR','/usr/share/php/PHPUnit34/usr/share/php/PHPUnit');//version 3.4
define('TEST_DIR','/var/www/prestashop/modules/firstPrestaModule');


set_include_path (get_include_path().PATH_SEPARATOR . CLASS_DIR);
set_include_path (get_include_path().PATH_SEPARATOR . CONFIG_DIR);
set_include_path (get_include_path().PATH_SEPARATOR . PHPUNIT_DIR);
set_include_path (get_include_path().PATH_SEPARATOR . TEST_DIR);
/**
  * Any other component that registers an autoloader unregisters the default __autoload().
  *
  */
require_once 'autoload.php';
spl_autoload_register('__autoload');

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
