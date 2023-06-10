<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>MO Bank Account Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="form.css?<?php echo time();?>">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <?php
  if(isset($_GET['s']) || isset($_GET['c']) || isset($_GET['b']) || isset($_GET['k'])){
    if(isset($_GET['s'])){
      $account_type="Saving Account";
    }
    else if(isset($_GET['c'])){
      $account_type="Current Account";
    }
    else if(isset($_GET['b'])){
      $account_type="Bussiness Account";
    }
    else if(isset($_GET['k'])){
      $account_type="Kids Account";
    }
    ?>
 
            <div class="card">
              <div class="row1">
                <div class="col">
                <?php
                
                ?>  
                <div class="col2">
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="card">
                  <?php
                  
                  ?>
                  <div class="tith">
                    <h3 class="uppercase"><?php echo $account_type;?> form</h3>
                  </div>
                   <?php
?>
                    <div class="rowo">
                          <h4>Name</h4>
                          <input type="text" id="first" class="first_name" name="first" placeholder="First Name" required>
                          <input name="middle" type="text" placeholder="Middle Name">
                          <input name="last" type="text" id="" class="" placeholder="Last Name">
                    </div>
                    <div class="rowo"> 
                          <h4>Parents Name</h4>
                          <input name="father" type="text" id="form3Example1m1" placeholder="Fathers Name" required>
                          <input name="mother" type="text" id="form3Example1n1"  placeholder="Mothers Name" required>
                    </div>
    
                    <div class="row2">
                        <h4>Address</h4>
                      <input name="address" type="text" id="form3Example8" class="form-control form-control-lg" placeholder="Enter your Address" required>
                    </div>
    
                    <div class="gender">
    
                      <h4 class="gender-title">Gender: </h4>
    
                      <div class="gender-alone">
                        
                        <input name="gender" class="" type="radio" name="inlineRadioOptions" 
                          value="Female" />
                          <label class="genderl" for="femaleGender">Female</label>
                      </div>
    
                      <div class="gender-alone">
                        
                        <input name="gender" class="form-check-input" type="radio" name="inlineRadioOptions"
                          value="Male" />
                          <label class="genderl" for="maleGender">Male</label>
                      </div>
    
                      <div class="gender-alone">
                        
                        <input name="gender" class="t" type="radio" name="inlineRadioOptions"
                          value="Other" />
                          <label class="genderl" for="otherGender">Other</label>
                      </div>
    
                    </div>
    
                    <div class="row3">
                       <div class="option">
                        <select class="select" name="select1">
                          <option value="1">State</option>
                          <option value="Andhra Pradesh">Andhra Pradesh</option>
                          <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                          <option value="Assam">Assam</option>
                          <option value="Bihar">Bihar</option>
                          <option value="Chandigarh">Chandigarh</option>
                          <option value="Chhattisgarh">Chhattisgarh</option>
                          <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                          <option value="Daman and Diu">Daman and Diu</option>
                          <option value="Delhi">Delhi</option>
                          <option value="Lakshadweep">Lakshadweep</option>
                          <option value="Puducherry">Puducherry</option>
                          <option value="Goa">Goa</option>
                          <option value="Gujarat">Gujarat</option>
                          <option value="Haryana">Haryana</option>
                          <option value="Himachal Pradesh">Himachal Pradesh</option>
                          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                          <option value="Jharkhand">Jharkhand</option>
                          <option value="Karnataka">Karnataka</option>
                          <option value="Kerala">Kerala</option>
                          <option value="Madhya Pradesh">Madhya Pradesh</option>
                          <option value="Maharashtra">Maharashtra</option>
                          <option value="Manipur">Manipur</option>
                          <option value="Meghalaya">Meghalaya</option>
                          <option value="Mizoram">Mizoram</option>
                          <option value="Nagaland">Nagaland</option>
                          <option value="Odisha">Odisha</option>
                          <option value="Punjab">Punjab</option>
                          <option value="Rajasthan">Rajasthan</option>
                          <option value="Sikkim">Sikkim</option>
                          <option value="Tamil Nadu">Tamil Nadu</option>
                          <option value="Telangana">Telangana</option>
                          <option value="Tripura">Tripura</option>
                          <option value="Uttar Pradesh">Uttar Pradesh</option>
                          <option value="Uttarakhand">Uttarakhand</option>
                          <option value="West Bengal">West Bengal</option>
                        </select>
    
                      </div>
                      <div class="option1">
                        <select class="select" name="select2">
                          <option value="1">City</option>
                          <option value="">Select City</option>
                          <option value="Bagra">Bagra</option>
                          <option value="Barka Kana">Barka Kana</option>
                          <option value="Barki Saria">Barki Saria</option>
                          <option value="Barwadih">Barwadih</option>
                          <option value="Bhojudih">Bhojudih</option>
                          <option value="Bokaro">Bokaro</option>
                          <option value="Bundu">Bundu</option>
                          <option value="Chaibasa">Chaibasa</option>
                          <option value="Chakradharpur">Chakradharpur</option>
                          <option value="Chakulia">Chakulia</option>
                          <option value="Chandil">Chandil</option>
                          <option value="Chas">Chas</option>
                          <option value="Chatra">Chatra</option>
                          <option value="Chiria">Chiria</option>
                          <option value="Daltonganj">Daltonganj</option>
                          <option value="Deogarh">Deogarh</option>
                          <option value="Dhanbad">Dhanbad</option>
                          <option value="Dhanwar">Dhanwar</option>
                          <option value="Dugda">Dugda</option>
                          <option value="Dumka">Dumka</option>
                          <option value="Garhwa">Garhwa</option>
                          <option value="Ghatsila">Ghatsila</option>
                          <option value="Giridih">Giridih</option>
                          <option value="Gobindpur">Gobindpur</option>
                          <option value="Godda">Godda</option>
                          <option value="Gomoh">Gomoh</option>
                          <option value="Gopinathpur">Gopinathpur</option>
                          <option value="Gua">Gua</option>
                          <option value="Gumia">Gumia</option>
                          <option value="Gumla">Gumla</option>
                          <option value="Hazaribag">Hazaribag</option>
                          <option value="Hazaribagh">Hazaribagh</option>
                          <option value="Hesla">Hesla</option>
                          <option value="Husainabad">Husainabad</option>
                          <option value="Jagannathpur">Jagannathpur</option>
                          <option value="Jamadoba">Jamadoba</option>
                          <option value="Jamshedpur">Jamshedpur</option>
                          <option value="Jamtara">Jamtara</option>
                          <option value="Jasidih">Jasidih</option>
                          <option value="Jharia">Jharia</option>
                          <option value="Jugsalai">Jugsalai</option>
                          <option value="Jumri Tilaiya">Jumri Tilaiya</option>
                          <option value="Kalikapur">Kalikapur</option>
                          <option value="Kandra">Kandra</option>
                          <option value="Kanke">Kanke</option>
                          <option value="Katras">Katras</option>
                          <option value="Kenduadih">Kenduadih</option>
                          <option value="Kharsawan">Kharsawan</option>
                          <option value="Khunti">Khunti</option>
                          <option value="Kodarma">Kodarma</option>
                          <option value="Kuju">Kuju</option>
                          <option value="Latehar">Latehar</option>
                          <option value="Lohardaga">Lohardaga</option>
                          <option value="Madhupur">Madhupur</option>
                          <option value="Malkera">Malkera</option>
                          <option value="Manoharpur">Manoharpur</option>
                          <option value="Mugma">Mugma</option>
                          <option value="Mushabani">Mushabani</option>
                          <option value="Neturhat">Neturhat</option>
                          <option value="Nirsa">Nirsa</option>
                          <option value="Noamundi">Noamundi</option>
                          <option value="Pakur">Pakur</option>
                          <option value="Palamu">Palamu</option>
                          <option value="Pashchim Singhbhum">Pashchim Singhbhum</option>
                          <option value="patamda">patamda</option>
                          <option value="Pathardih">Pathardih</option>
                          <option value="Purba Singhbhum">Purba Singhbhum</option>
                          <option value="Ramgarh">Ramgarh</option>
                          <option value="Ranchi">Ranchi</option>
                          <option value="Ray">Ray</option>
                          <option value="Sahibganj">Sahibganj</option>
                          <option value="Saraikela">Saraikela</option>
                          <option value="Sarubera">Sarubera</option>
                          <option value="Sijua">Sijua</option>
                          <option value="Simdega">Simdega</option>
                          <option value="Sini">Sini</option>
                          <option value="Topchanchi">Topchanchi</option>
                        </select>
                        </div>
                    </div>
                    <div class="mer1">
                    <div class="row4">
                       <h4>Date Of Birth</h4>
                      <input name="date" type="date" id="fo" name="dob" required>
                    </div>
    
                    <div class="row5">
                      <h4>PIN code</h4>
                      <input name="pin" type="number" id="pin" placeholder="PIN code" required>
                     
                    </div>
                    </div>
                    <div class="mer2">
                    <div class="row6">
                        <h4>Adhaar Number</h4>
                      <input name="adhaar" type="number" id="adhaar"  placeholder="Adhaar Number" required>
                    </div>
                    <div class="row7">
                        <h4>Mobile Number</h4>
                      <input name="mobile" type="number" id="mobile"  placeholder="Mobile Number" required>
                    </div>
                    <div class="row8">
                        <h4>Email ID</h4>
                      <input name="email" type="email" id="email" placeholder="Email ID" required>
                      
                    </div>
                    </div>
                    <div class="mer3">
                    <div class="row11">
                        <h4>Password</h4>
                      <input name="password" type="password" id="password"  placeholder="Password" required>
                    </div>
                    <div class="row12">
                        <h4>Confirm Password</h4>
                      <input name="repassword" type="password" id="repassword"  placeholder="Confirm Password" required>
                    </div>
                    </div>
                    <div class="row9">
                        <h4>Add Photo</h4>
                      <input name="photo" type="file" id="form3Example99" required>
                    </div> 
                    <div class="row10">
                      <button type="button" class="btn1">Reset all</button>
                      <button type="submit" class="btn2" name="btn2">Submit form</button>
                    </div>
                </form> 
                <?php
                
                if(isset($_POST['first']) && isset($_POST['father']) && isset($_POST['mother']) && isset($_POST['address']) && isset($_POST['gender']) && isset($_POST['date']) && isset($_POST['pin']) && isset($_POST['adhaar']) && isset($_POST['mobile']) && isset($_POST['email']) && isset($_POST['photo']) && isset($_POST['select1']) && isset($_POST['select2']) || isset($_POST['middle']) || isset($_POST['last'])){
                    if(isset($_POST['btn2'])){
                      $fname=$_POST['first'];
                      $mname=$_POST['middle'];
                      $lname=$_POST['last'];
                      $father=$_POST['father'];
                      $mother=$_POST['mother'];
                      $address=$_POST['address'];
                      $gender=$_POST['gender'];
                      $state=$_POST['select1'];
                      $city=$_POST['select2'];
                      $date=$_POST['date'];
                      $pin=$_POST['pin'];
                      $mobile=$_POST['mobile'];
                      $adhaar=$_POST['adhaar'];
                      $email=$_POST['email'];
                      $pass=$_POST['password'];
                      $repass=$_POST['repassword'];
                      $account_no=rand(9000000000000000,9999999999999999);
                      if($pass===$repass){
                        $password=md5($pass);

                         $filename = $_FILES["photo"]["name"];

                         $tempname = $_FILES["photo"]["tmp_name"];  

                         $folder = "./image/".$filename;  
                         move_uploaded_file($tempname, $folder);
                         $query="INSERT INTO account(Account_No,Account_Password,First_Name,Middle_Name,Last_Name,Father_Name,Mother_Name,Address,Gender,State,City,Date,Pin,Mobile,Adhaar,Email,Photo,Account_Type) VALUES ('$account_no','$password','$fname','$mname','$lname','$father','$mother','$address','$gender','$state','$city','$date','$pin','$mobile','$adhaar','$email','$filename','$account_type')";
                         $result=mysqli_query($conn,$query);
                         if($result){
                            $to=$email;
                            $subject="Your Account Details";
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
                                <h3>Welcome to MO BANK</h3>
                              </div>
                              <div class='coe'>
                                <h5>Dear, .$fname. </h5>
                                <p>You have successfully opened your . $account_type . in MO BANK.</p>
                                <h4>Your Account Number is : <span>. $account_no .</span>.</h4>
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
                              $a=$account_no;
                              $e=$email;
                              $m="You have successfully opened your account";
                              date_default_timezone_set('Asia/Kolkata');
                              $d=date('H:ia');
                              $query="INSERT INTO message(Account_No,Email,Message,Date) VALUES ('$a','$e','$m','$d')";
                              $result=mysqli_query($conn,$query);
                              if($result){
                               $ss="Please check you mail.";
                               $success="You have successfully opened your account";
                               $welcome="You have successfully opened your account";
                              }
                            }
                            else{
                          
                            }
                        
                          }
                          else{
                            $error="Form not filled successfully";
                         }

                      }
                      else{
                        $error="Password do not matched";
                      }
                 }
                  ?>
                  <?php
                      
                }
                ?> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
}
else{
?>
  <script>
    Swal.fire({
  title: 'Please Visit Our Main Page',
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
if(isset($success)){
?>
<script>
  let timerInterval
Swal.fire({
  title: 'Please wait',
  html: '<?php echo "Sending mail for " ;?><?php echo $account_type;?>',
  timer: 3000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 1000)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
});
</script>
<?php
}
if(isset($ss)){
?>
<script>
	Swal.fire({
  title: '<?php echo $welcome; echo " ";?><?php echo $fname;?>',
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
  icon: 'error',
  title: 'Oops...',
  text: '<?php echo $error;?>',
  footer: '<a href="contact.php">If any issues?</a>'
})
</script>
<?php
}
?>

</body>
</html>