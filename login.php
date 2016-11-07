<?php
session_start();
require_once('vendor/autoload.php');
$fb = new Facebook\Facebook([
  'app_id' => '325716011154620', // Replace {app-id} with your app id
  'app_secret' => 'f3bfff77d0884ab630352206a47f70fd',
  'default_graph_version' => 'v2.8',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://facebook-api-jauzmendiji.c9users.io/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

?>