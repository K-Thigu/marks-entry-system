<?php

if(!isset($_REQUEST['subjid']))
{
    echo 'nothing here';
    return;

}

$subjid = $_REQUEST['subjid'];

    $sql = "SELECT * FROM results WHERE subject_id = $subjid order by subject_id , score";
   
    $result = $conn->query($sql);
   
    if ($result->num_rows > 0) {
       echo '<ul>';
        while($row = $result->fetch_assoc())
            {
                
                $studid = $row['student_id'];
                
                $sql2 = "SELECT * FROM students WHERE student_id = $studid";
                $result2 = $conn->query($sql2);
                $row2 = $result2->fetch_assoc();

                $fullname = $row2['first_name'] . ' ' . $row2['last_name'] .' ['.$row2['adm_no'].']';



                echo '<li>'. $fullname .' - '. $row['score'].'</li>';

            }
    
    
        }

      else 
        echo 'no records';  
?>