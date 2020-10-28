<?php
// variables
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if ($text == "") {
//REQUEST
$response = "CON what would you to check \n";
$response .= "1. My doctor";
$response .= "2. Emergency";

} else if ($text == "1") {
//first response

$response = "CON Choose doctors  you want \n";
$response .= "1.Dentist \n";
$response .= "2. General doctor \n";

} else if ($text =="2") {
    //logic for first  response
    $response .= "1. choose your location \n";
    $response .= "2. First Aid \n ";

}else if ($text == "1*1") {
// second response
$dentistDoctor = "DR FIONA";

$response = "END your doctor is ".$dentistDoctor;

} else if ($text = "1*2"){

    $prob = "Injury";
    $ response = "END you can lay him on a plane services".$prob
}

header('content-type; text/plain');
echo $response;

}







?>