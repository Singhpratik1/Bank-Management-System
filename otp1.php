<?php
include "header.php";
$otpn=$_SESSION['otp'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="otp.css?<?php echo time();?>">

    <script src="otp1.js"></script>
    <title>Document</title>
</head>
<body>
<div class="cont">
    <div class="p">
        <div class="c">
            <h4>Please enter the one time password <br> to verify your account</h4>
            <div> <span>A code has been sent to</span> <small>*******9897</small> </div>
            <div id="otp" class="i"> 
                <form action="" method="post">
                <input name="a" class="m" type="text" id="first" maxlength="1" /> 
                <input name="b" class="m" type="text" id="second" maxlength="1" /> 
                <input name="c" class="m" type="text" id="third" maxlength="1" /> 
                <input name="d" class="m" type="text" id="fourth" maxlength="1" /> 
                <input name="e" class="m" type="text" id="fifth" maxlength="1" /> 
                <input name="f" class="m" type="text" id="sixth" maxlength="1" /> </div>
            <div class="mt-4"> <button name="btn" class="btn btn-danger px-4 validate">Validate</button> </div>
</form>
        </div>
    </div>
    <?php
    if(isset($_SESSION['otp'])){
    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']) && isset($_POST['d']) && isset($_POST['e']) && isset($_POST['f'])){
        $otp1=$_POST['a'].$_POST['b'].$_POST['c'].$_POST['d'].$_POST['e'].$_POST['f'];
        $otp=(int)$otp1;
        if($otpn===$otp){
        $s_no="CNI".rand(10000000,99999999);
        $sender=$_SESSION['sender_acc'];
        $reciver=$_SESSION['reciver_acc'];
        $query="SELECT* FROM account WHERE Account_No='$sender'";
        $result=mysqli_query($conn,$query);
        if($result){
            $s=mysqli_fetch_assoc($result);
            $sname=$s['First_Name'];
            $sender_balance=$s['Balance']-$_SESSION['amount'];
            $query="UPDATE account SET Balance='$sender_balance' WHERE Account_No='$sender'";
            $result_senderb=mysqli_query($conn,$query);
            if($result_senderb){
                $query="SELECT* FROM account WHERE Account_No='$reciver'";
            $result1=mysqli_query($conn,$query);
            if($result1){
                $r=mysqli_fetch_assoc($result1);
                $rname=$r['First_Name'];
            }
                date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
                $date=date('d-m-Y');
                $time=date('H:i:s');
                $debit=$_SESSION['amount'];
                $acc_type=$s['Account_Type'];
                $query="INSERT INTO transection(Account,Transaction_Id,Sender_Name,Reciver_Name,Reciver_AccountNo,Date,Time,Debit,Balance,Account_Type) VALUES ('$sender','$s_no','$sname','$rname','$reciver','$date','$time','$debit','$sender_balance','$acc_type')";
                $resultdate=mysqli_query($conn,$query);
                if($resultdate){
                    $ok="ok";
                }
            }
            $query="SELECT* FROM account WHERE Account_No='$reciver'";
            $result1=mysqli_query($conn,$query);
            if($result1){
                $r=mysqli_fetch_assoc($result1);
                $rname=$r['First_Name'];
                $reciver_balance=$r['Balance']+$_SESSION['amount'];
                $query="UPDATE account SET Balance='$reciver_balance' WHERE Account_No='$reciver'";
                $result_reciverb=mysqli_query($conn,$query);
                if($result_reciverb){
                    
                date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
                $date=date('d-m-Y');
                $time=date('H:i:s');
                $credit=$_SESSION['amount'];
                $acc_type=$r['Account_Type'];
                $query="INSERT INTO transection(Account,Transaction_Id,Sender_Name,Reciver_Name,Reciver_AccountNo,Date,Time,credit,Balance,Account_Type) VALUES ('$reciver','$s_no','$sname','$rname','$reciver','$date','$time','$credit','$reciver_balance','$acc_type')";
                $result_rupdate=mysqli_query($conn,$query);
                if($result_rupdate){
                    if(isset($ok)){
                        $a=$sender;
                              $e=$_COOKIE['email1'];
                              $m="₹".$credit." has been debited from your account";
                              date_default_timezone_set('Asia/Kolkata');
                              $d=date('H:ia');
                              $query="INSERT INTO message(Account_No,Email,Message,Date) VALUES ('$a','$e','$m','$d')";
                              $result=mysqli_query($conn,$query);
                              if($result){
                                $success="Transaction Successfull";
                              }
                    }
                }
                }
            }
            

        }
    }
    else{
        $error="Incorrect OTP";
    }
    }
}
    ?>
</div>
<?php
if(isset($success)){
?>
<script>
    Swal.fire(
  '₹<?php echo $_SESSION['amount'];?>',
  '<?php echo $success;?>',
  'success'
)
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
