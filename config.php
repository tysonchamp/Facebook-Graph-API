<?php
include_once("inc/facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########
$appId = '1056081707824566'; //Facebook App ID
$appSecret = '64002d0c1c5b442aeeda365a21c6c836'; // Facebook App Secret
$homeurl = 'http://localhost/facebook_login_with_php/';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret

));
$fbuser = $facebook->getUser();
?>