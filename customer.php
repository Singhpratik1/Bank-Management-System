<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
        <?php
            $conn=mysqli_connect('localhost','root','','bank');
            if(!$conn){
                die ("not connected".mysqli_connect_error());
            }
            ?>
            <?php
            if(isset($_POST['search'])){
                $namehai=$_POST['search'];
                $query="SELECT Name,Email,Mobile,Adhaar,Balance,Image FROM bank_table WHERE Name='$namehai'";
                $result=mysqli_query($conn,$query);
                if(mysqli_num_rows($result)>0){
                    while($info=mysqli_fetch_assoc($result)){
                ?>
    <div class="dubmain">
        <h2>Customer Detail</h2>
        <div class="pic"><img src="images\<?php echo $info['Image'];?>" title="<?php echo $info['Image'];?>" alt=""></div>
        <div class="about">
            <div class="info">
                <div class="same">
                    <div class="icon"><i class="fa fa-user"></i></div>
                    <h3>Name  :</h3>
                    <span><?php echo $info['Name'];?></span>
                </div>
                <div class="same">
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                    <h3>Email  :</h3>
                    <span><?php echo $info['Email'];?></span>
                </div>
                <div class="same">
                    <div class="icon"><i class="fa fa-phone"></i></div>
                    <h3>Mobile  :</h3>
                    <span><?php echo $info['Mobile'];?></span>
                </div>
                <div class="same">
                    <div class="icon"><i class="fa fa-id-card" aria-hidden="true"></i></div>
                    <h3>Adhaar No  :</h3>
                    <span><?php echo $info['Adhaar'];?></span>
                </div>
                <div class="same">
                    <div class="icon"><i class="fa fa-balance-scale" aria-hidden="true"></i></div>
                    <h3>Balance  :</h3>
                    <span>₹<?php echo $info['Balance'];?>.00</span>
                </div>
                <div class="same">
                    <button class="buut">pay</button>
                    </div>
                <?php
                    }
            }
        }
        ?>
        
            </div>
        </div>
        
    </div>
</section>
<footer>
        <span>Created By <a href="https://www.codingnepalweb.com">PratikPrakash</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>