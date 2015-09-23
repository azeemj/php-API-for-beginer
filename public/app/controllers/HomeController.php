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
         $server = new soap_server();
        $server->register("server");
    }

    public function showWelcome() {
        return View::make('hello');
    }

    function test() {
       
        $client = new nusoap_client(url() . "/server");

        $error = $client->getError();
        if ($error) {
            echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
        }

        $result = $client->call("getProd", array("category" => "books"));

        if ($client->fault) {
            echo "<h2>Fault</h2><pre>";
            print_r($result);
            echo "</pre>";
        } else {
            $error = $client->getError();
            if ($error) {
                echo "<h2>Error</h2><pre>" . $error . "</pre>";
            } else {
                echo "<h2>Books</h2><pre>";
                echo $result;
                echo "</pre>";
            }
        }
    }

    function getProd($category) {
        if ($category == "books") {
            return join(",", array(
                "The WordPress Anthology",
                "PHP Master: Write Cutting Edge Code",
                "Build Your Own Website the Right Way"));
        } else {
            return "No products listed under that category";
        }
        
       
        $server->service($HTTP_RAW_POST_DATA);
    }
    
    

}
