<?php 

if (isset($_POST['json'])) { // once button ispresed to get data for CBD get all required data and transform it to Json
    $student_id=$all_result->id;
    $student_name=$all_result->name;
    $student_grades=$all_result->grade;
    $student_gradesArray=json_decode($student_grades, true);
    $average = array_sum($student_gradesArray)/count($student_gradesArray);
    $average=round($average, 2);

    if ($average >=7) {
        $status="PASS";
        
    }else{
        $status="FAIL";
    }
    
    $arr = array('ID' => $student_id, 'Name' => $student_name, 'Grades' => $student_grades, 'Avg Grade' => $average, 'Status' => $status);
    echo json_encode($arr);
}

 ?>