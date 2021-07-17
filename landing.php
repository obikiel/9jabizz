<?php
session_start();
        if (isset($_POST["submit"]) && ($_POST['search'] == "")){
          $_SESSION["msg"] = "please enter a product name";

    }
    

    /*$curl = curl_init();
  
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.coinranking.com/v2/coins",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "x-access-token: coinrankingf77966b91bf2c5b3aa0d1736642f47d50e122a8eae2e81b5"
      ),
    ));
  
    $response = curl_exec($curl);
  
    curl_close($curl);
    echo $response;
    */

?>
