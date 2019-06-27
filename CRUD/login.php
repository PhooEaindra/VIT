
<?php
session_start();//session starts here

?>



<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Login</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;

</style>

<body>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Username" name="user" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
                                <center><br><b>Not register yet ?</b> <br></b><a href="registration.php">Register here</a></center><!--for centered text-->

                            <!-- Change this to a button or input when using this as a form -->
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>

<?php

include("dbconnect.php");

if(isset($_POST['login']))
{
    $user_name=$_POST['user'];
    $user_pass=$_POST['pass'];

    $check_user="select * from delivery WHERE username='$user_name'AND password='$user_pass'";

    $run=mysqli_query($connect,$check_user);

    if(mysqli_num_rows($run))
    {
        header("Location:index.php");

        $_SESSION['pass']=$user_pass;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Name or password is incorrect!')</script>";
    }
}
?>