
<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
   

    <title>Document</title>
</head>
<body>
    <?php
if(isset($_COOKIE['email1'])){
    $rr=$_COOKIE['email1'];
                        ?>
    <div class="container emp-profile">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
            
                    <div class="profile-img">
                    <?php
                    if(isset($_POST['sub'])){
                        $files=$_FILES['image']['name'];
                        $tmpname=$_FILES['image']['tmp_name'];
                        $folder="./image/".$files;
                        move_uploaded_file($tmpname,$folder);
                        $query="UPDATE user SET Photo='$folder' WHERE Email='$rr'";
                        $result=mysqli_query($conn,$query);
                    
                        if($result){
                            
                        } 
                        else{
                            echo "not success";
                        }
                    ?>
                        <?php
                    }
                        ?>
                        <?php
                            $query="SELECT* FROM user WHERE Email='$rr'";
                            $result=mysqli_query($conn,$query);
                            if($result){
                                $row=mysqli_fetch_assoc($result);    
                            ?>
                        <img src="<?php echo $row['Photo'];?>" alt="">
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="image" class="image" placeholder="chose photo">
                        </div> 
                    </div>    
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                         
                                <h5>
                                    <?php echo $row['Name'];?>
                                </h5>
                                <h6>
                                    View your profile
                                </h6>
                                <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="sub" value="Confirm Photo">
             
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>User Id</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $row['Name'].rand(900,999);?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $row['Name'];?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $row['Email'];?>/p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Phone</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p><?php echo $row['Mobile'];?></p>
                                        </div>
                                    </div>
                                    <?php
                    
                                    }
                                    ?>
                                   
                        </div>
                        
                    </div>
                </div>
            </div>
        </form>           
    </div>
    <?php
                }
                            ?>
</section>
</body>
</html>