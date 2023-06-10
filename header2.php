<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="header.css?<?php echo time();?>">
    <script src="mss.js"></script>
    <title>Document</title>
</head>
<body>
<section class="mainh">
        <div class="navbar navbar-inverse">
            <div class="container-fluid">
            <div class="rowh">
                <div class="col-lg-12">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a href="#" class="navbar-brand" style="color: #0649be;">MO BANK</a>
                    </div>
                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="home.php">Home</a></li>
                            <li><a href="">Payment</a></li>
                            <li><a href="">Passbook</a></li>
                            <li><a href="">View Card</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li>
                                <form action="customer.php" class="navbar-form" method="POST">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="submit" name="search" id="textvalue" placeholder="Search Anything Here..." class="form-control">
                                            <span class="input-group-addon" type="submit"><span class="glyphicon glyphicon-search" type="submit"></span></span>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       </div>      
       <div class="title">
        <h1>Welcome to <span style="color: #0649be;">MO</span> BANK</h1>
       </div>
       