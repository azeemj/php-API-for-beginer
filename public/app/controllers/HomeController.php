<?php

class HomeController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    function __construct() {
         //$server = new soap_server();
        //$server->register("server");
    }

    public function showWelcome() {
        
        
       
        
        $list= clientLib::getStudentList();
        
       // echo "cc";
       
       //print_r($list);
       $data['body'] = View::make('home')->with("list",$list)->with("url","addstudent");
       return View::make('index' , $data);
    }

    
    

}
