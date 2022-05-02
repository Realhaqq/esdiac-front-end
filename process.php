<?php 
session_start();
extract($_SESSION);
extract($_POST);
extract($_GET);
$baseUrl = "http://0.0.0.0:8080/api/v1";

if(isset($_POST['login'])){
if(!empty($_POST['email']) && !empty($_POST['password'])){
$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "$baseUrl/auth/login",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n\t\"email\":\"$email\",\n\t\"password\":\"$password\"\n}",
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
//   echo $response;
  $json = json_decode($response, TRUE);

    if($json['data'] == null){

        echo ("<script type='text/javascript'>
    window.alert('Invalid Credentials');
    window.location.href='index.php';
    </script>");

    }else {
        $_SESSION['token'] = $json['data']['token'];
        $_SESSION['firstName'] = $json['data']['firstName'];
        $_SESSION['lastName'] = $json['data']['lastName'];
        header("Location: dashboard.php");
    }

}

}

}


if(isset($_POST['register'])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
           
    $curl = curl_init();
    
    curl_setopt_array($curl, [
      CURLOPT_PORT => "8080",
      CURLOPT_URL => "$baseUrl/auth/register",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "{\n\t\"firstName\":\"$firstName\",\n\t\"lastName\":\"$lastName\",\n\t\"email\":\"$email\",\n\t\"password\":\"$password\",\n\t\"country\":\"$country\"\n}",
      CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
      ],
    ]);
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
      $json = json_decode($response, TRUE);

      if($json['error']){
          echo $json['error'];
      }else if($json['data']){
        echo ("<script type='text/javascript'>
        window.alert('Account created Successfully!');
        window.location.href='index.php';
        </script>");
      }
    
    }
    
    }
    
    }


    if(isset($logout)){

        session_unset();
        session_destroy();
        header("Location: index.php");
    }
?>



