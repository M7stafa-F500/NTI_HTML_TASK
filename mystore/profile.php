<?php
session_start();

if(!isset($_SESSION['username'])){
    header ("location: login.php");
    exit;
}


?>


<?php include 'nav.php'; ?>

<div style="  margin: 30px;">
    
    <h3> Username: <?php echo $_SESSION['username']; ?> </h3>
</div>