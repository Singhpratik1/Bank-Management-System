<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Play&family=Roboto+Slab:wght@300&family=Source+Sans+Pro:wght@300&family=Varela&display=swap" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
<?php
    $conn=mysqli_connect('localhost','root','','bank');
    if(!$conn){
    echo("Connection failed".mysqil_connect_error());
    }
?>
        <div class="container1">
          <div class="row1">
            <div class="col-sm-81">
              <div class="table-responsive">
                <table class="table table-bordered">
                <tr>
                <th>Sr</th>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Adhaar</th>
                <th>Balance</th>
                <th>Images</th>
                <tr>
                <?php
                    $query="SELECT `Name`, `Email`, `Mobile`, `Adhaar`,`Balance`,`Image` FROM `bank_table`";
                    $result=mysqli_query($conn,$query);
                    $count=0;
                    while($num=mysqli_fetch_assoc($result)){ 
                ?>
                <td><?php echo ++$count;?></td>
                <td><?php echo $num['Name'];?></td>
                <td><?php echo $num['Email'];?></td>
                <td><?php echo $num['Mobile'];?></td>
                <td><?php echo $num['Adhaar'];?></td>
                <td><?php echo $num['Balance'];?></td>
                <td><img src="images/<?php echo $num['Image'];?>" width="100px" height="50%" alt="Image"></td>
                </tr>
                <?php
                  }                
                ?>
             </div>
             
          </div>
        </div>
                </div>
    </section>
    
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<footer>
        <span>Created By <a href="https://www.codingnepalweb.com">PratikPrakash</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>
</body>
</html>