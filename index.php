<?php
require 'php-sdk/src/facebook.php';

$facebook = new Facebook(array(
  'appId'  => '322457274454128',
  'secret' => 'eee4f7ae473544b3864b566b7054ade2',
));

// Get User ID
$user = $facebook->getUser();
?>

<h1>Hello, PHP-SDK!</h1>