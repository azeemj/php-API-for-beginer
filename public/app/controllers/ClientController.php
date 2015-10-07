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
//$app_list = file_get_contents('https://esolutionap-azeemj.rhcloud.com/api/get_app_list/0');
$url = "http://esolutionap-azeemj.rhcloud.com/api/get_app_list/0";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, '3');

$app_list = curl_exec($ch);

curl_close($ch);

$app_list = json_decode($app_list, true);

return View::make('testapi')->with('app_list', $app_list)->with('list', 1);
}

function appDetails($apiname, $id) {


//$app_list = file_get_contents('http://localhost/test-RNDA/api/' . $apiname . '/' . $id);
$url = 'http://esolutionap-azeemj.rhcloud.com/api/'.$apiname .'/'.$id;
//   $url=url().'/api/' . $apiname . '/' . $id;
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, '3');

$app_list = curl_exec($ch);

curl_close($ch);


$app_list = json_decode($app_list);

return View::make('testapi')->with('app_list', $app_list)->with('list', 0);
}

function postStudentData(){


    $data=Input::get('data');
    
    
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, url()."/testapi");
curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, "postvar1=value1&postvar2=value2&postvar3=value3");
//echo http_build_query($data);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

// in real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));
// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$server_output = curl_exec ($ch);
echo $server_output;
curl_close ($ch);
die('one');

//print_r($data);die;

}

    
}