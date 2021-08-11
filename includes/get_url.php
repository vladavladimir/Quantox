<?php 

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";//geting url
$id=explode("/", $url);	
$id=end($id); // defining id from url

 ?>