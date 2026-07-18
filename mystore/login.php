<?php 

session_start();
include 'nav.php';

// require_once 'dp.php';
if(($_SERVER['REQUEST_METHOD'] =='POST') && isset($_POST['name'])  && isset($_POST['pass'])) {

    $name=$_POST['name'];
    $password = $_POST['pass'];
  


    if (isset($_SESSION['registusername']) && $name == $_SESSION['registusername'] && $password == $_SESSION['registpassword']) {
        $_SESSION['username'] = $name;
        header("location:profile.php");
        exit;

    }   
else
    {

    $error="Wrong the password or username";
    
}
}


    ?>



<div style=" margin: 30px;">
    <h2>Login</h2>
    <?php if(isset($error))  echo "$error" ?>
    <form  method="POST" action="">
        <label>username:</label><br>
        <input type="text" name="name" required><br><br>
        
        <label>password</label><br>
        <input type="password" name="pass" required><br><br>
        
        <input class="btn" type="submit" value="OK" >
    </form>
</div>