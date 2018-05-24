<?php

session_start();
include_once 'conn.php';

if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];

$res = mysqli_query($con,"SELECT * FROM admin WHERE username = '$username'")
or die (" failed to query database" .mysql_error());

$row = mysqli_fetch_array($res);

if ($row['username'] == $username && $row['password'] == $password)  {
?>
  <script type="text/javascript">

  alert ("Login successfully! ")
  </script>

  <?php
    $_SESSION['username'] = $row['username'];
    echo $_SESSION['username'];
 header("Location: index.php");
}
else
{
?>
  <script type="text/javascript">
  alert ("Login error. Please try again! ")
  </script>

  <?php
}
}

?>

<!DOCTYPE html>
<html lang="en">
<body bgcolor="#E6E6FA">
 
  <style type="text/css">.wrapper {    
  margin-top: 80px;
  margin-bottom: 20px;
}

.form-signin {
  max-width: 420px;
  padding: 30px 38px 66px;
  margin: 0 auto;
  background-color: #eee;
  border: 3px dotted rgba(0,0,0,0.1);  
  }

.form-signin-heading {
  text-align:center;
  margin-bottom: 30px;
}

label {

  margin-bottom: 10px;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
}

input[type="text"] {
  margin-bottom: 16px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
   width: 100%;
}

input[type="password"] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
   width: 100%;
}

.colorgraph {
  height: 7px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}</style>
  
  
<div class = "container">
  <div class="wrapper">
    <form action="" method="post" name="Login_Form" class="form-signin">       
        <h3 class="form-signin-heading">Welcome Admin! Please Log In</h3>
        <hr class="colorgraph"><br>
        <label><b>Username</b></label>

        <input type="text" class="form-control" name="username" placeholder="Enter Username" required="" autofocus="" />
        
        <label><b>Password</b></label>
        <input type="password" class="form-control" name="password" placeholder="Enter Password" value="" required=""/>      
         <button type="submit" name="submit">Login</button>
         
    </form>     
  </div>
</div>
</body>


</html>