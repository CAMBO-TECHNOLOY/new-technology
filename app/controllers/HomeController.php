<?php

class HomeController extends BaseController {

	public function getIndex(){
		return View::make("site_layouts.master");
	}

}
