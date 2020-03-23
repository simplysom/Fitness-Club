<?php 
  if (isset($_POST['phone'])) {
    
    // $text="hi i am som";
    
//post
$name=$_POST['name'];
$url="https://www.way2sms.com/api/v1/sendCampaign";
$lat=19.10723200252726;
$lon=72.83742473188745;
$lat1=(string)$lat;
$lon1=(string)$lon;
$message = urlencode("Hi".$name."We are located at : https://www.google.com/maps/search/?api=1&query=".$lat1.",".$lon1);// urlencode your message
// $phone="9137485595";
$phone=$_POST['phone'];
// echo $phone;
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=9RF72NEPST4NYV129T08NQLNWMZ15NBW&secret=IB5NQMLE7TBNJWU2&usetype=stage&phone=$phone&senderid=Fitness-Club&message=$message");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
$data = json_decode($result);
if ($data->status == "success") {
  echo "message sent to". $phone;
}

  }

 ?>