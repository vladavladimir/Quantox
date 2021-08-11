<?php 

include_once 'includes/get_url.php';// iclliding file so code is cleaner
include_once 'Class/Json.php';

$get_result = new GetJson();
$all_result = $get_result->returnJson($id);



include_once 'includes/include_json.php';
include_once 'includes/include_xml.php';

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 		<center><h2 style="font-size: 42px">Student Name : <?=$all_result->name ?></h2></center><!--Giving info witch student it is with some inline style -->
        <center><form method="post">
            <button style="padding:10px; border-radius: 10px; background-color: red;font-size: 22px; color: white;" name="json" type="submit" value="<?=$all_result->id?>">Get Resutl for CSM</button><!--Calculation and geting data as Json -->
            <button style="padding:10px; border-radius: 10px; background-color: green;font-size: 22px; color: white;" name="xml" type="submit" value="<?=$all_result->id?>">Get Resutl for CSMB</button><!--Calculation and geting data as XML -->
        </form></center>
 </body>
 </html>