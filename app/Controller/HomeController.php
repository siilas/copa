<?php

class HomeController extends AppController {

	public function index() {
		$this->set("title_for_layout", Inflector::humanize("Página inicial"));
	}
}