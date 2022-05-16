<?php

session_start();

if(!isset($_SESSION['user']))

{

    echo "<p align='center'>Please Login again ";

    echo "<a href='index.php'>Click Here to Login</a></p>";

}

else

{

    $now = time(); 

    if($now > $_SESSION['expire'])

    {

        session_destroy();

        echo "<p align='center'>Your session has expire ! <a href='index.php'>Login Here</a></p>";

    }

    else

    {
 
?>



<html>

<head>

    <title>Log out after 5 mins</title>

</head>

<body>

<p  >
<p style="padding-top:20px;  height:400px; text-align:center">
        Welcome <?php echo $_SESSION['user']; ?> 

     <br>
    <span style="color:red;text-align:center">Your Session Will destroy after 5 minutes you will  
redirected on next page</span>
 
  </p>   

</p>

<?php

 }

}

?>

</body>

</html>
