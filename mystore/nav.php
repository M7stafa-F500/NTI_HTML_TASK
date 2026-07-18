
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="profile.css">
    
</head>
<body>

<div class="navbar">
    <?php if (isset($_SESSION['username'])): ?>
      
        <span style=" color:blue;">Welcome: <?php echo $_SESSION['username']; ?></span>
        <a href="logout.php" style="color: red;">logout</a>
    <?php else: ?>
       
        <a href="login.php">login</a>
        <a  href="register.php">create accont</a>
    <?php endif; ?>
</div>                       

<hr>


