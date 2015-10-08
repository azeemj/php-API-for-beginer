<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class clientLib {

    static function getStudentList() {

        $url = url()."/liststudent";
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, '3');
        $list = curl_exec($ch);
        curl_close($ch);
        //$x=json_decode($list);
       
       // echo "test".$x->links();
      //  echo "liast".$list;
        //$app_list = json_decode($list,true); //true- it will be converted to array other wise it willbe object array
      $list = json_decode($list, TRUE);
        return $list;
    }

}
