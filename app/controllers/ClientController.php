<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ClientController extends BaseController {

    function __construct() {
        
    }

    function appList() {
        
        $app_list = file_get_contents('http://localhost/test-RNDA/api/get_app_list/0');
       
        $app_list = json_decode($app_list, true);
        
        return View::make('testapi')->with('app_list',$app_list)->with('list',1);
    }
    function appDetails($apiname,$id) {
         
       
        $app_list = file_get_contents('http://localhost/test-RNDA/api/'.$apiname.'/'.$id);
        $app_list = json_decode($app_list, true);
         print_r($app_list);
         die('test');
        return View::make('testapi')->with('app_list',$app_list)->with('list',1);
    }

}
