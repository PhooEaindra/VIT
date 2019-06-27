<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modern Business - Start Bootstrap Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Custom and Font Awesome -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="navbar-brand">Order me :9</a>
            </div>
            <div class="navbar-collapse collapse navbar-right" id="mainNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="about.html">About</a></li>
                    <li><a href="service.html">Service</a></li>
                    <li class="active"><a href="add.php">Add new Items</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
<br><br>

<div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Add New Items</h1>
                <form action="" method="post" class="form-group sendMessageForm">
                    <label for="title" class="control-label">
                        Title:
                    </label>
                    <input type="text" placeholder="Title" name="title" class="form-control">
                    <label for="categ" class="control-label">
                        Category:
                    </label>
                    <select class="form-control" name="cat" placeholder="Category" name="town">
                        <option value="food" >Food</option>
                        <option value="cloth">Cothings</option>
                        <option value="bag">Bags</option>
           
                        </select>
                    <label for="shopname" class="control-label">
                        Shop name :
                    </label>
                    <input type="tel" placeholder="Shop name" name="shopname" class="form-control">
                    <label for="stownship" class="control-label">
                         Shop Township:
                    </label>
                    <select class="form-control" placeholder="Shop Township" name="shoptown">
                        <option value="Hlaing Thar Yar">Hlaing Thar Yar</option>
                        <option value="Hlaing" >Hlaing</option>
                        <option value="South Okkalapa">South Okkalapa</option>
                        <option value="North Okkalapa">North Okkalapa</option>
                        <option value="Insein">Insein</option>
                        <option value="Mayangone">Mayangone</option>
                        <option value="Kamayut">Kamayut</option>
                        </select>
                    <label for="address" class="control-label">Shop Address:</label>
                    <textarea name="address" id="" cols="30" rows="5" class="form-control">
                        
                    </textarea>
                    <div class="form-group">
                            <label for="sel1" class="control-label">Upload shop image:</label>
                            <input type="file" name="img">

                            </div>

                    <input type="submit"  name"add" value="Add item" class="btn btn-primary">
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Link -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap javaScript -->
    <script src="js/bootstrap.min.js"></script>


<?php

include("dbconnect.php");//make connection here
if(isset($_POST['add']))
{
    $title=$_POST['title'];//here getting result from the post array after submitting the form.
    $cat=$_POST['cat'];//same
    $shopname=$_POST['shopname'];
    $shoptown=$_POST['shoptown'];//same
    $shopadd=$_POST['address'];//same/same
    $shopimg=$_POST['img'];

    if(empty($cat) || empty($shopname) ||  empty($shoptown) || empty($shopadd) ||empty($shopimg) )     
    {
        if($cat=='')
        {
            //javascript use for input checking
            echo"<script>alert('Choose the Category')</script>";
        exit();//this use if first is not work then other will not show
        }

        if($shopname=='')
        {
            echo"<script>alert('Please enter the shopname')</script>";
        exit();
        }

        if($shoptown=='')
        {
            echo"<script>alert('Please select the shop township')</script>";
        exit();
        }
         
        if($shopadd=='')
        {
            echo"<script>alert('Please enter the shop address')</script>";
        exit();
        }
         if($shopimg=='')
        {
            echo"<script>alert('Please upload the shop image')</script>";
        exit();
        }

        }   

        else
        {
//insert the user into the database.
        $insert="INSERT INTO new item list (Title, Category, ShopName, ShopTownship, ShopAddress, ShopImage) VALUES ('$title','$cat','$shopname','$shoptown','$shopadd','$shopimg')";

        $result=mysqli_query($connect,$insert);
        
        header('Location:index.php');
        
        }

}
