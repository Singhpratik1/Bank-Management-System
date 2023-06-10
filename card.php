<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="card.css?<?php echo time();?>">
    <title>Document</title>
</head>
<body>
<div class="container"> 

    <div class="card"> 
        <div class="top-part"> 
            <div class="chip-image">
                <img src="https://i.imgur.com/PEKNCj9.png">
                <span><h3>MO BANK</h3></span> 
            </div>
        </div> 
        <div class="card-details"> 
            <?php
            if(isset($_COOKIE['email1'])){
                $e=$_COOKIE['email1'];
                $query="SELECT* FROM account WHERE Email='$e'";
                $result=mysqli_query($conn,$query);
                if($result){
            ?>
            <div class="card-number">
                <?php
                $row=mysqli_fetch_assoc($result);
                $acc=(string)$row['Account_No'];
                $arr=str_split($acc);
                $new='';
                $count=0;
                ?>
                <?php
                for($i=0;$i<count($arr);$i++){
                    if($count<4){
                        $new .=$arr[$i];
                    }
                    $count+=1;
                    ?>
                <span><?php if($count==4){echo $new;$new='';$count=0;}?></span> 
                <?php
                }
                ?>
            </div> 
            <div class="card-number">
                <span><h4><?php echo $row['First_Name'];?><?php echo " ";?><?php echo $row['Last_Name'];?></h4></span>
                
            </div>
            <div class="date">
                <span>26/10</span>
                <?php
                }
            }
            ?>
                <span><img src="https://imgur.com/KpIC2Cs.png"></span>
            </div> </div>  
        </div> 
    </div>
</body>
</html>

