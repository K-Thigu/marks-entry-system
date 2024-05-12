<?php
// Start the session
session_start();

?>

<html>
    <head>
        <title>Home</title>
        <link href="styles.css" type="styles">
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
<h2 style="color: black;"><b><ins>UNITS</ins></b></h2>

    <table width="100%" border="1">
        <tr><td width="20%"><?php include 'units.php'; ?></td>
        <td><?php include 'unit-details.php'; ?></td>
        </tr>
    </table>
    </body>
</html>