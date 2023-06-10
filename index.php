<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>MO BANK</title>
</head>
<body>
	<section>
<div class="container">
<br>  <p class="text-center">For more information contact RBI <a href="https://rbi.org.in/Scripts/helpdesk.aspx"> Bootstrap-ecommerce.com</a></p>
<hr>





<div class="card bg-light" style="display:flex; justify-content: center;">
<article class="card" style="width: 60%">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
	<form action="" method="post">
	<div class="form-group input-group" style="display: flex;">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Full name" type="text" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group"style="display: flex;">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group"style="display: flex;">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+91</option>
		    <option value="1">+97</option>
		    <option value="2">+19</option>
		    <option value="3">+70</option>
		</select>
    	<input name="mobile" class="form-control" placeholder="Phone number" type="text" required >
    </div> <!-- form-group// -->
    <div class="form-group input-group"style="display: flex;">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="pass" placeholder="Create password" type="password" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group"style="display: flex;">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="repass" placeholder="Repeat password" type="password" required>
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="signin.php">Log In</a> </p>                                                                 
</form>
<?php
$conn=mysqli_connect('localhost','root','','bank');
if(!$conn){
	echo "Database not connected";
}
?>
<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['pass'];
	$repass=$_POST['repass'];
	$repassword=md5($password);
	$query="SELECT Name,Email,Mobile,Password FROM user WHERE Email='$email'";
	$result=mysqli_query($conn,$query);
	if($result){
		$row=mysqli_fetch_assoc($result);
		if($row['Email']===$email || $row['Mobile']===$mobile || $row['Password']===$repassword){
			$message="You are already registered";
		}
		else{
			if($password===$repass){
				$h="success";
				$query="INSERT INTO user(Name,Email,Mobile,Password) VALUES ('$name','$email','$mobile','$repassword')";
				$result=mysqli_query($conn,$query);
				if($result){
					$_COOKIE['email1']=$email;
					$email_cookie=$_COOKIE['email1'];
                    setcookie('email1',$email,time()+96400*30);
                              $e=$email;
                              $m="Welcome to MO BANK ".$name;
                              date_default_timezone_set('Asia/Kolkata');
                              $d=date('H:ia');
                              $query="INSERT INTO message(Email,Message,Date) VALUES ('$e','$m','$d')";
                              $result1=mysqli_query($conn,$query);
                              if($result1){
								$welcome="Welcome to MO BANK";
                              }
				}
			}
			else{
				$message="please check your password";
			}
		}
	}
	
   
	
}
?>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">MO BANK</h3>
<p class="h5 text-white">CONTACT US  <br> Feel free to contact us if Any issues or any problem you are facing. </p>   <br>
<p><a class="btn btn-warning" target="_blank" href="contact.php"> Contact MO BANK  
 <i class="fa fa-address "></i></a></p>
</div>
<br><br>
</article>
</section>
<?php
if(isset($welcome)){
	?>
<script>
	Swal.fire({
  title: '<?php echo $welcome;?><?php echo $name;?>',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
}).then(function(){
	window.location="main.php";
})
</script>	
<?php	
}
?>
<?php
if(isset($message)){
	?>
<script>
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: '<?php echo $message;?>',
  footer: '<a href="">Why do I have this issue?</a>'
})
</script>	
<?php	
}
?>
</body>
</html>
<?php
ob_end_flush(); 
?>