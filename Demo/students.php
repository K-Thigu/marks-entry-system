<?php
// Start the session
session_start();
?>


<html>
    <head>
        <title>Students</title>
    </head>
    <body style="margin: 50px;">
       
    <?php
    $status = $_SESSION["loggedin"];
if($status == false){
    header('location: index.php');
    exit();
}
include 'menu.php';
include 'database.php';
    ?>

        <h1 style="text-align: center; color:red"><ins>Marks Entry System</ins></h1>
    
        
    
        <h1 style="text-align: center;">Students</h1> 
        
            <div class="students">

            <?php
   

   $sql = "SELECT * FROM students order by first_name asc ";
  
   $result = $conn->query($sql);
  
   if ($result->num_rows > 0) {
      echo '<table width="100%" border="1"><ul>';
       while($row = $result->fetch_assoc())
           {

               echo '<tr><td><li>'. $row['first_name'].'</li>';
            
                include 'entry.php';
           }
           echo '</td></tr></ul></table>';
   }else{
       
       echo 'no records';
   }

?>


            </div>
    </body>
</html>