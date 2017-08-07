<?php

namespace Controller;

use \W\Controller\Controller;

class ConsoleController extends Controller {
	
	public function consoles() {
		$this->show('console/consoles.php');
	}

}
