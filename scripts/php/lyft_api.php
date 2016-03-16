<?php
    // create curl resource
    $ch = curl_init();

    $lyftTokenUrl = "https://api.lyft.com/oauth/token";
    $username = "bJ6fWLC3Xv8G";
    $password = "BjypVVg8Ml1MtJPMZzyA2KPgWC0laRF7";
    $data = array("grant_type" => "client_credentials", "scope" => "public");
    $data_string = json_encode($data);
    $username = "bJ6fWLC3Xv8G";
    $password = "BjypVVg8Ml1MtJPMZzyA2KPgWC0laRF7";

    // set url
    curl_setopt($ch, CURLOPT_URL, $lyftTokenUrl);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));

    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output contains the output string
    $output = curl_exec($ch);

    // close curl resource to free up system resources
    curl_close($ch);

    $output = json_decode($output, true);
    $token = $output['access_token'];

    //echo $token;
    $userLat = $_GET['lat'];
    $userLng = $_GET['lng'];
    $lyftRideUrl = "https://api.lyft.com/v1/eta?lat=$userLat&lng=$userLng";
    // create curl resource
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, $lyftRideUrl);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: Bearer $token"
    ));

    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output contains the output string
    $output = curl_exec($ch);

    // close curl resource to free up system resources
    curl_close($ch);

    return $output;
?>