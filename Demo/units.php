<div class="units">

<?php
   

    $sql = "SELECT * FROM subjects order by subject_name asc ";
   
    $result = $conn->query($sql);
   
    if ($result->num_rows > 0) {
       echo '<ul>';
        while($row = $result->fetch_assoc())
            {

                echo '<li><a href="home.php?subjid='.$row['subject_id'].'">'.$row['subject_name'].'</a></li>';

            }
            echo '</ul>';
    }else{
        
        echo 'no records';
    }

?>


</div>