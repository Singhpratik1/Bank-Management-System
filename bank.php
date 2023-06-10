<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="bank.css?<?php echo time();?>">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Play&family=Roboto+Slab:wght@300&family=Source+Sans+Pro:wght@300&family=Varela&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    
    
       <?php
      $conn=mysqli_connect('localhost','root','','bank');
       ?>
         
        <?php
    
            if(isset($_POST['acc']) && isset($_POST['reacc']) && isset($_POST['mobile']) && isset($_POST['payment'])){
                function validate($data){
                    $data=trim($data);
                    $data=stripslashes($data);
                    $data=htmlspecialchars($data);
                    return $data;
                }
                //$name=validate($_POST['name']);
                
                $acc=validate($_POST['acc']);
                $reacc=validate($_POST['reacc']);
                $mobile=validate($_POST['mobile']);
                $acctype=$_POST['payment'];
//<-............................For   Query   ...........................................-> 
                $query="SELECT* FROM account WHERE Account_No='$acc'";
                $result=mysqli_query($conn,$query);
                if($reacc===$acc){
                if($result){
                    $row2=mysqli_fetch_assoc($result);
                    if(isset($_POST['amount']) && $_POST['amount']<100001){
                        $_SESSION['amount']=$_POST['amount'];
                        if($row2['Account_No']===$acc && $row2['Account_Type']===$acctype && $row2['Mobile']===$mobile){
                            $_SESSION['reciver_acc']=$row2['Account_No'];
                            $_SESSION['acc_type']=$row2['Account_Type'];
                            $confirmdetails="Please enter your details";
                            $success="Do you really want to pay";
                        }
                        else{
                            $invalid="Invalid details";
                        }
                    }
                    else{
                        
                        $invalid="Insufficient Balance";
                    
                    }
                }
                else{
                    $invalid="Wrong Account Number";
                }
            }
            else{
                $invalid="Incorrect Account Number";
            }
            }

?>
<?php
            if(isset($_POST['selfacc']) && isset($_POST['password']) && isset($_POST['selfMobile']) && isset($_POST['payment2']) && isset($_POST['selfamount'])){
                function validate($data){
                    $data=trim($data);
                    $data=stripslashes($data);
                    $data=htmlspecialchars($data);
                    return $data;
                }
                $acc=validate($_POST['selfacc']);
                $pass=validate($_POST['password']);
                $mobile=validate($_POST['selfMobile']);
                $acctype=$_POST['payment2'];
                $query="SELECT* FROM account WHERE Account_No='$acc'";
                $result=mysqli_query($conn,$query);
                if($result){
                    $row2=mysqli_fetch_assoc($result);
                    if($row2['Account_Password']===md5($pass)){
                            if($_COOKIE['email1']===$row2['Email']){
                                if(isset($_POST['selfamount']) && $_POST['selfamount']<100000){
                                    if($row2['Account_No']===$acc && $row2['Account_Type']===$acctype && $row2['Mobile']===$mobile){
                                        $total=$row2['Balance']+$_POST['selfamount'];
                                        $query="UPDATE account SET Balance='$total' WHERE Account_No='$acc'";
                                        $result=mysqli_query($conn,$query);
                                        if($result){
                                            $sname="Self";
                                            $rname="Self";
                                            $s_no="CNI".rand(10000000,99999999);
                                            date_default_timezone_set("Asia/Calcutta"); 
                                            $date=date('y-m-d');
                                            $time=date('H:i:s');
                                            $credit=$_POST['selfamount'];
                                            $acc_type=$acctype;
                                            $reciver_balance=$row2['Balance']+$credit;
                                            $query="INSERT INTO transection(Account,Transaction_Id,Sender_Name,Reciver_Name,Reciver_AccountNo,Date,Time,credit,Balance,Account_Type) Values('$acc','$s_no','$sname','$rname','$acc','$date','$time','$credit','$reciver_balance','$acc_type')";
                                            $result_rupdate=mysqli_query($conn,$query);
                                            if($result_rupdate){
                                            $success1="Transection successfull";
                                            }
                                        }
                                    }
                                    else{
                                        $invalid="Invalid details";
                                    }
                                }
                                else{
                                    $invalid="Make sure you are amount<100000";
                                 }
                
                            }
                            else{
                                $invalid="Your details do not matched";
                            }
                       
                    }
                    else{
                         $invalid="Incorrect Password";
                    }
                }
                else{
                    $invalid="Incorrect Account Number";
                }
            }  
        
        ?>
        <?php
                        
                   
                 
                    if(isset($_POST['acc1'])){
                        $acc=$_POST['acc1'];
                        $reacc=$_POST['reacc1'];
                        $pass=$_POST['password1'];
                        $mobile=$_POST['Mobile1'];
                        $acctype=$_POST['payment3'];
                        $query="SELECT* FROM account WHERE Account_No='$acc'";
                        $result=mysqli_query($conn,$query);
                        if($acc===$reacc){
                        if($result){
                            $row=mysqli_fetch_assoc($result);
                            if(md5($pass)===$row['Account_Password']){
                                 if($row['Account_No']===$acc && $_COOKIE['email1']===$row['Email'] && $row['Mobile']===$mobile && $row['Account_Type']===$acctype){
                                    $balance=$row['Balance'];
                                    $balancefetch="Bank Balance fetch successfully";
                                }
                                else{
                                    $invalid="Invalid Details1";
                                }
                        }
                        else{
                            $invalid="Invalid Account No";
                        }
                            
                        }
                        else{
                            $invalid="Invalid Details2";
                        }
                    }
                    else{
                        $invalid="Invalid Account number";
                    }
                    }
        ?>
       <div class="banking-service">
        <div class="service">
            <div class="heading">
                <h3>Recipient Detail</h3>
            </div>
            <div class="detail">
                <h3>Enter the detail of recipient</h3>
            </div>
            <div class="ani">
                <div>
                    <p>WELCOME TO MO BANK...Please enter the informations correctly and have a safe banking      THANK YOU!!!!</p>
                </div>
            </div>
            <form class="form1" action="" method="post">
                <div class="input1">
                    <input type="number" name="acc" placeholder="Enter Account Number" required>
                </div>
                <div class="input1">
                    <input type="number" name="reacc" placeholder="Re-enter Account Number" required>
                </div>
                <div class="input1">
                    <input type="number" name="mobile" placeholder="Phone Number" required>
                </div>
                <div class="input1">
                    <input type="number" name="amount" placeholder="Enter the amount to credit" required>
                </div>
                <div class="input1">
                    <select class="pay" name="payment" id="">
                        <option value="">Select recipient account</option>
                        <option value="Current Account">Current Account</option>
                        <option value="Saving Account">Saving Account</option>
                        <option value="Bussiness Account">Bussiness Account</option>
                        <option value="Kids Account">Kids Account</option>
                    </select>
                </div>
                <div class="input1">
                    <button name="ok">Confirm</button>
                </div>
            </form>
        </div>
        <div class="service">
            <div class="heading">
                <h3>Add Money</h3>
            </div>
            <div class="detail">
                <h3>Enter the detail of Your account</h3>
            </div>
            <div class="ani">
                <div>
                    <p>WELCOME TO MO BANK...Please enter the informations correctly and have a safe banking      THANK YOU!!!!</p>
                </div>
            </div>
            <form class="form1" action="" method="post">
            <div class="input1">
                    <input type="number" name="selfacc" placeholder="Enter Account Number" required>
                </div>
                <div class="input1">
                    <input type="password" name="password" placeholder="Enter Password" required>
                </div>
                <div class="input1">
                    <input type="number" name="selfMobile" placeholder="Phone Number" required>
                </div>
                <div class="input1">
                    <input type="number" name="selfamount" placeholder="Enter the amount to credit" required>
                </div>
                <div class="input1">
                    <select class="pay" name="payment2" id="">
                        <option value="">Select your account</option>
                        <option value="Current Account">Current Account</option>
                        <option value="Saving Account">Saving Account</option>
                        <option value="Bussiness Account">Bussiness Account</option>
                        <option value="Kids Account">Kids Account</option>
                    </select>
                </div>
                <div class="input1">
                    <button>Confirm</button>
                </div>
                
            </div>
        </form>
        <div class="service">
            <div class="heading">
                <h3>For Balance</h3>
            </div>
            <div class="detail">
                <h3>Enter the detail of your account</h3>
            </div>
            <div class="ani">
                <div>
                    <p>WELCOME TO MO BANK....Please enter the informations correctly and have a safe banking      THANK YOU!!!!</p>
                </div>
            </div>
            
            <form class="form1" action="" method="post">
            <div class="input1">
                    <input type="number" name="acc1" placeholder="Enter Account Number" required>
                </div>
                <div class="input1">
                    <input type="number" name="reacc1" placeholder="Re-enter Account Number" required>
                </div>
                <div class="input1">
                    <input type="number" name="Mobile1" placeholder="Phone Number" required>
                </div>
                <div class="input1">
                    <input type="password" name="password1" placeholder="Enter Password" required>
                </div>
                <div class="input1">
                    <select class="pay" name="payment3" id="">
                        <option value="">Select your account</option>
                        <option value="Current Account">Current Account</option>
                        <option value="Saving Account">Saving Account</option>
                        <option value="Bussiness Account">Bussiness Account</option>
                        <option value="Kids Account">Kids Account</option>
                    </select>
                </div>
                <div class="input1">
                    <button>Confirm</button>
                </div>
            </form>
        </div>
       </div>
    </section>

    <?php
if(isset($success1)){
    ?>
    <script>
        Swal.fire(
  '₹<?php echo $_POST['selfamount'];?>',
  '<?php echo $success1;?>',
  'success'
)
    </script>
<?php
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
<?php
if(isset($balancefetch)){
?>
<script>
    Swal.fire({
  title: "₹<?php echo $balance?>",
  text: "<?php echo $balancefetch;?>",
  icon: "success",
  button: "OK",
})
</script>
<?php
}
?>
<?php
if(isset($invalid1)){
?>
<script>
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: '<?php echo $invalid1;?>',
  footer: '<a href="contact.php">If any issues?</a>'
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
if(isset($success)){
    ?>
    <script>
        Swal.fire(
  '₹<?php echo $_POST['amount'];?>',
  '<?php echo $success;?>',
  'question'
).then(function(){
    window.location="index.php";
})
    </script>
<?php
}
?>

<?php
if(isset($debitsucess)){
?>
<script>
    swal({
  title: "₹ <?php echo $_POST['debit'];?>",
  text: "<?php echo $debitsucess;?><?php echo $name?>",
  icon: "success",
  button: "OK",
});
</script>

<?php
}
?>

<?php
if(isset($debiterror)){
?>
<script>
   swal("Opps!", "...<?php echo $debiterror?>");
</script>

<?php
}
?>


    <footer>
        <span>Created By <a href="https://www.codingnepalweb.com">PratikPrakash</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>
   
    
</body>
</html>