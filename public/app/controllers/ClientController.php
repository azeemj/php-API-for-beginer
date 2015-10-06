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
        
        //$app_list = file_get_contents(url().'/api/get_app_list/0');
        $app_list = file_get_contents('https://esolutionap-azeemj.rhcloud.com/api/get_app_list/0');

        $app_list = json_decode($app_list, true);

        return View::make('testapi')->with('app_list', $app_list)->with('list', 1);
    }

    function appDetails($apiname, $id) {


        //$app_list = file_get_contents('http://localhost/test-RNDA/api/' . $apiname . '/' . $id);
        $url='https://esolutionap-azeemj.rhcloud.com/api/' . $apiname . '/' . $id;
      //  $url=url().'/api/' . $apiname . '/' . $id;
        $ch = curl_init();
       
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, '3');
        
        $app_list = curl_exec($ch);
        
        $content=curl_close($ch);
         
        
        $app_list = json_decode($app_list);
        

        return View::make('testapi')->with('app_list', $app_list)->with('list', 0);
    }

}
