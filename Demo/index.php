<?php
// Start the session
session_start();
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    


        <title>Home</title>
        <link rel="stylesheet" href="menu.css">
    </head>
    <body>

<?php

include_once 'database.php';

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty($_POST["username"]) || empty($_POST["password"])   ) 
        {
        echo "all fields required";
        return;
        }  
        
    $username = trim($_POST["username"]);
    $psswd = trim($_POST["password"]);

    $password = md5($psswd);

    // Validate credentials (assuming you have a database connection here)
    // Replace this with your logic to check username and password against a database

    $query = "SELECT * FROM `Users` WHERE email = '$username' AND password = '$password'  ";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
       
        $row = $result->fetch_assoc();
        
        
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("location: home.php");
        
    }else{
        
        echo 'Invalid credentials';
    }


}


?>




        <h1 style="text-align: center; color:red"><ins>Marks Entry System</ins></h1>

        
    
    <div style="border: 1px solid black; margin-left:auto; margin-right:auto; margin-top:130px; margin-bottom: auto; width: 50%; text-align:center; background-color:aquamarine">
    <h2>Login</h2>



    <?php echo empty($loginErr) ? "" : "<p style='color: red;'>$loginErr</p>"; ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
    </div>
</body>
</html>
