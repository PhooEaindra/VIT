
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Registration</title>
</head>
<style>
    .login-panel {
        margin-top: 120px;

</style>
<body>

<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
    <div class="row"><!-- row class is used for grid system in Bootstrap-->
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Registration</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="registration.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Phone Number" name="phnum" type="text" value="">
                            </div>
                        <div class="form-group">
                        <select class="form-control" id="sel1" placeholder="Destination Township" name="town">
                        <option value="" disabled selected>Choose township you can deliver</option>
                        <option value="Hlaing Thar Yar">Hlaing Thar Yar</option>
                        <option value="Hlaing" >Hlaing</option>
                        <option value="South Okkalapa">South Okkalapa</option>
                        <option value="North Okkalapa">North Okkalapa</option>
                        <option value="Insein">Insein</option>
                        <option value="Mayangone">Mayangone</option>
                        <option value="Kamayut">Kamayut</option>
                        </select>
                            </div>

                            <!-- <div class="form-group">
                            <label for="sel1" class="control-label">Upload your image:</label>
                            <input type="file" name="img" placeholder="Upload your image">

                            </div>
 -->



                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" >

                        </fieldset>
                    </form>
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text-->
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php

include("dbconnect.php");//make connection here
if(isset($_POST['register']))
{
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.
    $user_pass=$_POST['pass'];//same
    $user_phone=$_POST['phnum'];
    $township=$_POST['town'];//same
    // $user_image=$_POST['image'];//same/same


    if($user_name=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the name')</script>";
exit();//this use if first is not work then other will not show
    }

    if($user_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }

    if($user_phone=='')
    {
        echo"<script>alert('Please enter the phone number')</script>";
    exit();
    }
     
    if($township=='')
    {
        echo"<script>alert('Please select destination township')</script>";
    exit();
    }
//here query check weather if user already registered so can't register again.
    $sql="select * from delivery WHERE username='$user_name' AND password='$user_pass'";
    $result=mysqli_query($connect,$sql);

    if(mysqli_num_rows($result)>0)
    {
echo "<script>alert('Your account $user_name is already exist in our database, Please try another one!')</script>";
exit();
    }
//insert the user into the database.
    $insert_user="insert into delivery (username,password,phNumber,deliTownship) VALUE ('$user_name','$user_pass','$user_phone','$township')";
    if(mysqli_query($connect,$insert_user))
    {
        header('Location:index.php');
    }

}

?>