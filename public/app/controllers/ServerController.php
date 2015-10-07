<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ServerController extends BaseController {
    
    
    function __construct() {
        
    }
    
    
    function login(){
        
    }



function api($action,$id=0){
   
    $possible_url = array("get_app_list", "get_app","studentserver");
   // die("test");
    $value = "An error has occurred";
if ( in_array($action, $possible_url))
{
  switch ($action)
    {
      case "get_app_list":
          
        $value = userLib::get_app_list();
         
        break;
      case "get_app":
        
        if (isset($id))
          $value = userLib::get_app_by_id($id);
        else
          $value = "Missing argument";
        break;
        
      case "studentserver":
          //
          //echo "test";
        //  print_r($data);
          $value = array("app_name" => "Music Sleep Timer", "app_price" => "Free", "app_version" => "1.9");
          break;
    }
    
    echo (json_encode($value));
   exit;
}

//return JSON array

}

function testapi(){
    $data=Input::get();
    print_r($data);
   $value = array("app_name" => "Music Sleep Timer", "app_price" => "Free", "app_version" => "1.9");
    echo (json_encode($value));
}
    
}