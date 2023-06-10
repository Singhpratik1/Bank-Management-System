<?php
session_start();
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
    <link rel="stylesheet" href="signin.css?<?php echo time();?>">
    
    <title>Document</title>
</head>
<body>
    <div class="titl" style="text-align: center; margin-bottom: 5%;">
        <h2>Welcome to <span style="color: blue;">MO</span> BANK</h2>
    </div>
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
      <?php
      $conn=mysqli_connect('localhost','root','','bank');
      if(!$conn){
        echo 'error'.mysqli_connect_error();
      }
      ?>
      <?php
      if(isset($_POST['btn'])){
        if(isset($_POST['email']) && isset($_POST['pass'])){
            $email=$_POST['email'];
            $password=$_POST['pass'];
            $enpassword=md5($password);
            $_SESSION['email1']=$email;
            echo $email;
                //echo $row['Email'];
            $query="SELECT Email,Password FROM user WHERE Email='$email'";
            $result=mysqli_query($conn,$query);
            if($result){
                $row=mysqli_fetch_assoc($result);
                echo $row['Password'];        
                if($row['Email']===$email){
                  $pp=$row['Password'];
                    if($pp==$enpassword){
                              $e=$email;
                              $m="You have login successfully";
                              date_default_timezone_set('Asia/Kolkata');
                              $d=date('H:ia');
                              $query="INSERT INTO message(Email,Message,Date) VALUES ('$e','$m','$d')";
                              $result=mysqli_query($conn,$query);
                              if($result){
                                $message="Successfully Log In";
                                  $_COOKIE['email1']=$email;
                                  $email_cookie=$_COOKIE['email1'];
                                  setcookie("email1",$email_cookie,time()+(86400*30));
                              }
                    }
                }
                else{
                  $error="incorrect password";
                }
            }
            else{
                $reg="It Seems you are not register";
            }
        }
        else{
          $error="Invalid details";
        }
    }
  
      ?>
      <form action="" method="post">
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fa fa-envelope"></i>
          <input name="email" type="email" id="defaultForm-email" class="form-control validate" required>
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your Email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fa fa-lock"></i>
          <input name="pass" type="password" id="defaultForm-pass" class="form-control validate" required>
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your Password</label>
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
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Sign In</a>
</div>
<div class="m">
<div class="ani">
        <p>Dear Customers, Scheduled maintenance of MO BANK Internet Banking services has been planned on 24-Feb-2023 11:00 PM till 25-Feb-2023 00:00 AM. Internet banking services will be unavailable for MO BANK customers during this period. Kindly plan your activities accordingly. *** As per the RBI’s directives, All the IB customers mandatorily register their mobile for electronic transactions. Internet banking facilities of the customers where mobile number is not registered has been discontinued. Please register your mobile number with the nearest branch to activate internet banking services</p>
    </div>
</div>
<div class="dis">
    <h5>BEWARE !! Never disclose your OTP/PIN/CVV/Expiry date/Card Number to anybody over phone or any other media. Only fraudsters are asking such details.
सावधान !! कभी भी अपना कार्ड संख्या/पिन/सीवीवी/ओटीपी/समाप्ति तिथि किसी को मोबाइल कॉल/ई-मेल पर नहीं बताए। यह आपके लिये धोखाधड़ी/फ़्रौड का कारण बन सकता है।</h5>
</div>
<?php
if(isset($message)){
?>
<script>
    Swal.fire(
  'Log In',
  'Successfull',
  'success'
) .then(function() {
    window.location = "main.php";
})
</script>

<?php
}
?>
<?php
if(isset($reg)){
?>
<script>
    Swal.fire(
  'have you register?',
  '<?php echo $reg;?>?',
  'question'
).then(function(){
    window.location="home.php";
});
</script>

<?php
}
?>
<?php
if(isset($error)){
?>
<script>
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: '<?php echo $error;?>',
  footer: '<a href="">Forget Password?</a>'
}).then(function(){
    window.location="signin.php";
});
</script>

<?php
}
?>
<footer>
        <span>Created By <a href="https://www.codingnepalweb.com">PratikPrakash</a> | <span class="fa fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>
</body>
</html>