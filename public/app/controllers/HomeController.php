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




        $list = clientLib::getStudentList();

        // echo "cc";
        //print_r($list);
        $data['body'] = View::make('home')->with("list", $list)->with("url", "addstudent");
        return View::make('index', $data);
    }

    function Twoco() {

        return View::make('cart_test');
    }

    function return_co() {

        print_r($_POST);
        print_r($_GET);
    }
    
    function showpaypal(){
        
        
    }

    function paypal() {

        // Set sandbox (test mode) to true/false.
        $sandbox = TRUE;

// Set PayPal API version and credentials.
        $api_version = '85.0';
        $api_endpoint = $sandbox ? 'https://api-3t.sandbox.paypal.com/nvp' : 'https://api-3t.paypal.com/nvp';
        $api_username = $sandbox ? 'cc-facilitator_api1.sohopixel.com' : 'LIVE_USERNAME_GOES_HERE';
        $api_password = $sandbox ? '6586JJ88QY36BLYM' : 'LIVE_PASSWORD_GOES_HERE';
        $api_signature = $sandbox ? 'AFcWxV21C7fd0v3bYYYRCpSSRl31A8bU8RX5o1buKwxPCMBCXYX4RWwr' : 'LIVE_SIGNATURE_GOES_HERE';


//Store request params in an array
        $request_params = array
            (
            'METHOD' => 'DoDirectPayment',
            'USER' => $api_username,
            'PWD' => $api_password,
            'SIGNATURE' => $api_signature,
            'VERSION' => $api_version,
            'PAYMENTACTION' => 'Sale',
            'IPADDRESS' => $_SERVER['REMOTE_ADDR'],
            'CREDITCARDTYPE' => 'MasterCard',
            'ACCT' => '5522340006063638',
            'EXPDATE' => '022019',
            'CVV2' => '456',
            'FIRSTNAME' => 'Tester',
            'LASTNAME' => 'Testerson',
            'STREET' => '707 W. Bay Drive',
            'CITY' => 'Largo',
            'STATE' => 'FL',
            'COUNTRYCODE' => 'US',
            'ZIP' => '33770',
            'AMT' => '100.00',
            'CURRENCYCODE' => 'USD',
            'DESC' => 'Testing Payments Pro'
        );


        $nvp_string = '';
        foreach ($request_params as $var => $val) {
            $nvp_string .= '&' . $var . '=' . urlencode($val);
        }

        // Send NVP string to PayPal and store response
        $curl = curl_init();
       
        curl_setopt($curl, CURLOPT_VERBOSE, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_URL, $api_endpoint);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $nvp_string);

        $result = curl_exec($curl);
    print_r($result);
        curl_close($curl);
     echo "sddsd";
        // Parse the API response
        $nvp_response_array = parse_str($result);
        print_r($nvp_response_array);
        
    }
    // Function to convert NTP string to an array
function NVPToArray($NVPString)
{
    $proArray = array();
    while(strlen($NVPString))
    {
        // name
        $keypos= strpos($NVPString,'=');
        $keyval = substr($NVPString,0,$keypos);
        // value
        $valuepos = strpos($NVPString,'&') ? strpos($NVPString,'&'): strlen($NVPString);
        $valval = substr($NVPString,$keypos+1,$valuepos-$keypos-1);
        // decoding the respose
        $proArray[$keyval] = urldecode($valval);
        $NVPString = substr($NVPString,$valuepos+1,strlen($NVPString));
    }
    return $proArray;
}

}
