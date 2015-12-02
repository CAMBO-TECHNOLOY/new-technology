<?php
class ManagerController extends BaseController {

    public function getIndex(){

        return View::make('admin_layouts.pro_add');
    }

}