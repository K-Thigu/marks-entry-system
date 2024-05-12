<div class="marks">


<?php

if(isset($_POST['submit']) && $_POST['submit']=='update')
{

print_r($_POST);

}

?>




<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <?php       
    $sql3 = "SELECT * FROM subjects order by subject_name asc ";
  
  $result3 = $conn->query($sql3);
 
  if ($result3->num_rows > 0) {
     echo '<table width="100%" border="1">';
      while($row3 = $result3->fetch_assoc())
          {
            $sid = $row3['subject_id']; 

              echo '<tr><td>'. $row3['subject_name'].'</td><td><input type="number" min=0 max="100" name="subject_id['.$sid.']"></td></tr>';
           
               
          }
      echo '</table>';  
    }
?>


        <input type="hidden" name="student_id" value="<?php echo $row['student_id']  ?>">
        <input type="submit" name="submit" value="update">
    </form>
</div>