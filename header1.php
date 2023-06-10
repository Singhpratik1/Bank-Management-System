<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="header.css?<?php echo time();?>">
    <script src="mss.js"></script>
    <title>Document</title>
</head>
<body>
<?php
    $conn=mysqli_connect('localhost','root','','bank');
    if(!$conn){
    echo("Connection failed".mysqil_connect_error());
    }
?>
<script>
    function onlselect(){
    var s=document.getElementById("onselect");
    var displaytxt=s.options[s.selectedIndex].text;
    document.getElementById("textvalue").value=displaytxt;
}
</script>
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
                            <li class="active"><a href="main.php">Home</a></li>
                            <li><a href="bank.php">Payment</a></li>
                            <li><a href="passbook.php">Passbook</a></li>
                            <li><a href="card.php">View Card</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <select id="onselect" onchange="onlselect() ;">
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><option href="customer.php">All Customes</option><span class="caret"></span></a>
                            
                                <ul class="dropdown-menu">
                                    <?php
                                $query="SELECT Name FROM bank_table";
                                        $result=mysqli_query($conn,$query);
                                        $pp=3;
                                        if(mysqli_num_rows($result)>0){
                                            while($row=mysqli_fetch_assoc($result)){
                                            //foreach($row as $data){                                           
                                        ?>
                                
                                    <li><option><a href="customer.php"><?php echo $row['Name']?></a></option></li>
                                    <?php
                                            }
                                        }
                                    ?>
                            
                                </ul>
                        
                            </li>
                            </select>
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
                        <?php
                        if(isset($_COOKIE['email1'])){
                            if(isset($_COOKIE['email1'])){
                                if($result){
                                    $p=$_COOKIE['email1'];
                                    $query="SELECT* FROM Message WHERE Email='$p'";
                                    $result=mysqli_query($conn,$query);
                                    $count=mysqli_num_rows($result);
                            ?>
                        <li><button onclick="myFunction()" class="btn"><div class="noti"><?php echo $count;?></div><i class="fa fa-bell" style="font-size: 25px; color: white;" id="open"></i><span>Notification</span></button></li>
                        <div id="mmo">
                        <?php
                            ?>
                        
                        <?php
                        $p=$_COOKIE['email1'];
                        $query="SELECT* FROM Message WHERE Email='$p'";
                        $result=mysqli_query($conn,$query);
                            while($q=mysqli_fetch_assoc($result)){
                                ?>
                        <li><h4><?php echo $q['Message'];?></h4> <span><?php echo $q['Date'];?></span></li>
                        
                                <?php
                                
                         }
                        }
                        ?>
                      <?php
                       }
                    }
                        ?><?php
                        if(isset($_POST['out'])){
                            if(isset($_COOKIE['email1'])){
                            setcookie('email1',"",time()-3600*15);
                            }
                            ?>
                            <script>
                                Swal.fire({
                                    title: 'LogOut',
                                    text: 'Successfully',
                                    timer: 2000
                                }).then(function(){
                                    window.location="home.php";
                                })
                            </script>
                            <?php
                        }
                        ?>
                        </div>
                            <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <div class="n">
                                    <li><form action="" method="post"><button><a href="signin.php">Login</a></button></form></li>
                                    <li><form action="" method="post"><button name="out"><a href="home.php">Logout</a></button></form></li>
                                    <li><form action="" method="post"><button><a href="home.php">Deactivate Account</a></button></form></li>
                
                </div>
                                </ul>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       </div>      
       <div class="title">
        <h1>Welcome to <span style="color: #0649be;">MO</span> BANK</h1>
       </div>
<script>
function myFunction() {
  var x = document.getElementById("mmo");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
       



       