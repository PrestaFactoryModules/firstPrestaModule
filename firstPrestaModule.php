<?php

/* ======= Module firstPrestaModule ===== */
class firstPrestaModule extends Module {
	
	function __construct(){
		$this -> version = '0.1.0';
		$this -> name = 'firstPrestaModule';
		$this -> description = $this->l('mon premier presta module');
		parent::__construct();
	}
}
