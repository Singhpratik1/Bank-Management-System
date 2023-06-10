<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="passbook.css?<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top: 15%;"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fa fa-envelope"></i>
          <input name="account" type="number" id="defaultForm-email" class="form-control validate" required>
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your Account Number</label>
        </div>

        <div class="md-form mb-4">
          <i class="fa fa-lock"></i>
          <input name="pass" type="password" id="defaultForm-pass" class="form-control validate" required>
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Account Password</label>
        </div>

        <div class="md-form mb-4">
          <i class="fa fa-lock"></i>
          <select name="acc" id="">
            <option value="Select">Select your account</option>
            <option value="Current Account">Current Account</option>
            <option value="Saving Account">Saving Account</option>
            <option value="Bussiness Account">Bussiness Account</option>
            <option value="Kids Account">Kids Account</option>
          </select>
          
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button name="btn" class="btn btn-default">Login</button>
      </div>
      </Form>
      </div>
  </div>
</div>

<div class="text-center">
  <a href="" name="btn" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Sign In</a>
</div>

<div class="m">
<div class="ani">
 <?php
if(isset($_POST['acc'])){
    ?>
    <?php
    $acc1=$_POST['acc'];
    $aaa=$_POST['account'];
    $pass=$_POST['pass'];
    $query="SELECT* FROM account WHERE Account_no='$aaa'";
    $result=mysqli_query($conn,$query);
    if($result){
        $row=mysqli_fetch_assoc($result);
        if($row['Account_No']===$aaa && $row['Account_Type']===$acc1 && $row['Account_Password']===md5($pass)){
          
        ?>
    <div class="passbook">
        <div class="titlepass">
            <div class="mo">
                <h3>Account No  : <span style="font-size: 20px;"><?php echo $aaa;?></span></h3>
                <h2>Passbook</h2>
                <h3><span>MO</span> BANK</h3>
            </div>

        </div>
        <div class="con">
            <div class="photo">
                <div class="con2">
                    <div class="phh">
                        <img src="image/<?php echo $row['Photo'];?>" alt="" width="100%" height="50%">
                    </div>
                    <div class="phh" style="text-align: center;">
                        <span style="text-align: center; font-size: 20px">DOB</span>
                        <h4><?php echo $row['Date'];?></h4>
                        <h5><?php echo $row['Account_Type'];?></h5>
                    </div>
                </div>
                <div class="con1">
                    <div class="ph">
                        <h4>Name :</h4>
                        <h5><?php echo $row['First_Name'];?></h5>
                    </div>
                    <div class="ph">
                        <h4>Mobile :</h4>
                        <h5><?php echo $row['Mobile'];?></h5>
                    </div>
                    <div class="ph">
                        <h4>email :</h4>
                        <h5><?php echo $row['Email'];?></h5>
                    </div>
                    <div class="ph">
                        <h4>Adhaar :</h4>
                        <h5><?php echo $row['Adhaar'];?></h5>
                    </div>
                </div>
            </div>
            <div class="info">
                <div class="ph1">
                    <h4>Father :</h4>
                    <h5><?php echo $row['Father_Name'];?></h5>
                </div>
                <div class="ph1">
                    <h4>Mother :</h4>
                    <h5><?php echo $row['Mother_Name'];?></h5>
                </div>
                <div class="ph1">
                    <h4>State :</h4>
                    <h5><?php echo $row['State'];?></h5>
                </div>
                <div class="ph1">
                    <h4>City :</h4>
                    <h5><?php echo $row['City'];?></h5>
                    <h4>PIN :</h4>
                    <h5 style="margin-left: -5%;"><?php echo $row['Pin'];?></h5>
                </div>
                <div class="ph1">
                    <h4>Gender :</h4>
                    <h5><?php echo $row['Gender'];?></h5>
                </div>
                <div class="ph1">
                    <h4>Address :</h4>
                    <h5><?php echo $row['Address'];?></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container1" style="margin-top: 20px;">
          <div class="row1">
            <div class="col-sm-81">
              <div class="table-responsive">
                <table class="table table-bordered">
                <tr>
                  <th>S.No</th>
                <th>Transection_ID</th>
                <th>Sender_Name</th>
                <th>Reciver_Name</th>
                <th>Reciver_AccountNo</th>
                <th>Date</th>
                <th>Time</th>
                <th>credit</th>
                <th>Debit</th>
                <th>Balance</th>
                <th>Account_Type</th>
                <tr>
                <?php
                    $query="SELECT Transaction_Id, Sender_Name, Reciver_Name, Reciver_AccountNo, Date, Time, Credit, Debit, Balance, Account_Type FROM transection WHERE Account='$aaa'";
                    $result=mysqli_query($conn,$query);
                    if($result){
                    $count=0;
                    while($num=mysqli_fetch_assoc($result)){ 
                ?>
                <td><?php echo ++$count;?></td>
                <td><?php echo $num['Transaction_Id'];?></td>
                <td><?php echo $num['Sender_Name'];?></td>
                <td><?php echo $num['Reciver_Name'];?></td>
                <td><?php echo $num['Reciver_AccountNo'];?></td>
                <td><?php echo $num['Date'];?></td>
                <td><?php echo $num['Time'];?></td>
                <td><?php echo $num['Credit'];?></td>
                <td><?php echo $num['Debit'];?></td>
                <td><?php echo $num['Balance'];?></td>
                <td><?php echo $num['Account_Type'];?></td>
                </tr>
                <?php
                  } 
                
                }
                          
                ?>
             </div>
             
          </div>
        </div>
                </div>
</section>
<?php
}
?>
<?php
}
else{
  $invalid="Inavalid Details";
}
}


?>
<?php
if(isset($invalid)){
?>
<script>
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: '<?php echo $invalid;?>',
  footer: '<a href="contact.php">If any issues?</a>'
})
</script>

<?php
}
?>
</body>
</html>