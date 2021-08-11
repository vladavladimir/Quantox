<?php 
function arrayToXml($array, $rootElement = null, $xml = null) { 
    $_xml = $xml; 
      
    // If there is no Root Element then insert root 
    if ($_xml === null) { 
        $_xml = new SimpleXMLElement($rootElement !== null ? $rootElement : '<root/>'); 
    } 
      
    // Visit all key value pair 
    foreach ($array as $k => $v) { 
          
        // If there is nested array then 
        if (is_array($v)) {  
              
            // Call function for nested array 
            arrayToXml($v, $k, $_xml->addChild($k)); 
            } 
              
        else { 
              
            // Simply add child element.  
            $_xml->addChild($k, $v); 
        } 
    } 
      
    return $_xml->asXML(); 
}

if (isset($_POST['xml'])) { // once the button CSMB is pressed get all data and use function to transform to XML
    $student_id=$all_result->id;
    $student_name=$all_result->name;
    $student_grades=$all_result->grade;
    $student_gradesArray=json_decode($student_grades, true);
    $average = array_sum($student_gradesArray)/count($student_gradesArray);
    $average=round($average, 2);
    if (count($student_gradesArray)>1) {// chech how many grades dose student have
    	$top_grade= max($student_gradesArray);// get top grade if studen have more than one grade

    }else{
    	$top_grade=$student_gradesArray[0];// if student have only one grade
    }


    if ($top_grade>8) {
        $status="PASS";   
    }else{
        $status="FAIL";
    }
    
    $arr = array('ID' => $student_id, 'Name' => $student_name, 'Grades' => $student_grades, 'Avg Grade' => $average, 'Status' => $status);
    //$arr=array_flip($arr);
   echo arrayToXml($arr);
}

 ?>