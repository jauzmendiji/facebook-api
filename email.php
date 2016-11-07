<?php

require_once('vendor/autoload.php');
session_start();
$fb = new Facebook\Facebook([
  'app_id' => '325716011154620',
  'app_secret' => 'f3bfff77d0884ab630352206a47f70fd',
  'default_graph_version' => 'v2.8',
  ]);

$fb->setDefaultAccessToken((string) $_SESSION['fb_access_token']);
$response = $fb->get('/me?locale=es_ES&fields=name,email');
$userNode = $response->getGraphUser();

$email = $userNode['email'];
echo '<script language="javascript">alert("Recibiras un aviso al email '.$email.' cuando la kupela 1 sea embotellada.");</script>';
// insertar el email en la base de datos




//header("Location: ./index.php");

?>