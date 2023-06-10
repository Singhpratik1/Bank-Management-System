<?php
include "header.php";
$re=$_SESSION['reciver_acc'];
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 08</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="index.css">
	</head>
	<body>
		<div class="cont">
			<div class="row">
				<div class="col">
					<h2 class="heading">Enter your Details</h2>
				</div>
			</div>
			<div class="row">
				<div class="">
					<div class="login">
		      	<div class="icon">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text">Have an account?</h3>
						<form action="" class="login-form" method="post">
		      		<div class="form-group">
		      			<input name="acc" type="number" class="" placeholder="Account Number" required>
		      		</div>
	            <div class="form-group">
	              <input name="pass" type="password" class="" placeholder="Password" required>
	            </div>
				<div class="form-group">
	              <select name="select" id="">
					<option value="Select">Select Account</option>
					<option value="Current Account">Current Account</option>
					<option value="Saving Account">Saving Account</option>
				  </select>
	            </div>
	            <div class="extra">
	            	<div class="w-501">
	            		<label class="checkbox1">Remember Me
									  <input class="check" type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="pass">
									<a href="#">Forgot Password</a>
								</div>
	            </div>
	            <div class="form-group">
	            	<button name="ok"  type="submit" class="btn btn-primary rounded submit p-3 px-5">OK</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>
	<?php
	if(isset($_COOKIE['email1'])){
	if(isset($_POST['acc']) && isset($_POST['pass']) && isset($_POST['select'])){
		$acc=$_POST['acc'];
		$po=$_POST['pass'];
		$pass=md5($po);
		$acc_type=$_POST['select'];
		$query="SELECT* FROM account WHERE Account_No='$acc'";
		$result=mysqli_query($conn,$query);
		//if(isset($cOTLdata['char_data'])){
		if($result){
			$row=mysqli_fetch_assoc($result);
			if($_COOKIE['email1']===$row['Email']){
			if($row['Account_No']!==$re){
			if($row['Account_No']===$acc && $row['Account_Type']===$acc_type && $row['Account_Password']===$pass){
				$_SESSION['sender_acc']=$row['Account_No'];
				$otp_number=rand(100000,999999);
				$_SESSION['otp']=$otp_number;
				$to=$row['Email'];
                            $subject="Do not share your otp";
                            $message="
                            <!DOCTYPE html>
                            <html lang='en'>
                            <head>
                              <meta charset='UTF-8'>
                              <meta http-equiv='X-A-Compatible' content='IE=edge'>
                              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                              <title>Document</title>
                              <style>
                                .it{
                                  text-align: center;
                                  color: blue;
                                  margin-top: 4px;
                                  margin-bottom: 4px;
                                }
                                .coe{
                                  color: #fff;
                                  margin-left: auto;
                                  margin-right: auto;
                                  margin-bottom: 4px;
                                
                                }
                                .fotr{
                                  
                                  margin-left: auto;
                                  margin-right: auto;
                                  margin-bottom: 4px;
                                
                                }
                                .fotr h4{
                                  color: red;

                                }
                                
                              </style>
                            </head>
                            <body>
                              <div class='it'>
							  <h2 style='color: while;'>MO BANK</h3>
                                <h3>OTP verification</h3>
                              </div>
                              <div class='coe'>
                                <h4>Dear," .$row['First_Name']. "</h4>
								<h3>To continue with your transaction please verify your otp</h3>
                                <h3>Your otp is : <span>". $otp_number ."</span></h3>
                              </div>
                              <div class='fotr'>
                                <h4>Contact us</h4>
                                <p>For any query please be in touch</p>
                                <h3>To contact us please click <a href='contact.php'>here</a></h3>
                                <h3>Disclaimer</h3>
                                <p>Dontt share your otp and password with any unauthoried sites.</p>
                                <h4>THANK YOU</h4>
                                <h6>Team MO BANK</h6>
                              </div>
                            </body>
                            </html>";
                            $hed ='MINE-VERSION: 1.0' . "\r\n";
                            $hed .='Content-type: text/html; charset=iso-8859-1' . "\r\n";
                            $hed .='From: singhpratik3696@gmail.com';

                            if(mail($to,$subject,$message,$hed)){
                               $otp="Please check you mail.";
                            }
			}
			else{
				$error="Invalid Details";
			}
		}
		}
		else{
			$error="Invalid Details";
		}
	}
	else{
		$danger="Your Details dont't match";
	}
	}
	else{
		$error="Invalid Details";
	}
	}
	else{
		$error1="Please be patient there is same issues in side";
	}
	
	?>
<?php
if(isset($error)){
?>
<script>
	Swal.fire({
  title: '<?php echo $error1;?>',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
})
</script>
<?php
}
?>
<?php
if(isset($error)){
?>
<script>
	Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: '<?php echo $danger;?>',
  showConfirmButton: false,
  timer: 1500
})
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
  footer: '<a href="contact.php">If any issues?</a>'
})
</script>
<?php
}
?>
<?php
if(isset($otp)){
?>
<script>
	let timerInterval
Swal.fire({
  title: 'Auto close alert!',
  html: 'I will close in <b></b> milliseconds.',
  timer: 2000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then(function(){
	window.location="otp1.php";
})
</script>
<?php
}
?>
</body>
</html>

