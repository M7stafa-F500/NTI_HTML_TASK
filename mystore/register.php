<?php 
session_start();
// require_once 'dp.php';
if(($_SERVER['REQUEST_METHOD']=='POST') && isset($_POST['name']) &&
    isset($_POST['pass']))
    {

    $name=$_POST['name'];
    $password=$_POST['pass'];

    if(!empty($name) &&  !empty($password)){
      $_SESSION['registusername']=$name;
      $_SESSION['registpassword']=$password;

      header("location: login.php");

       exit;
    }
   
    }
    


?>


<?php include 'nav.php'; ?>

<div style=" margin: 30px;">
    <h2>Register</h2>
    <form method="POST" action="">
        <label>username</label><br>
        <input type="text" name="name" required><br>
        
        <label>password</label><br>
        <input type="password" name="pass" required><br>
        
        <input class="btn" type="submit" value="Create Account">
    </form>
</div>