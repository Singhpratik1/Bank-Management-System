<?php
include "header1.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css?<?php echo time();?>">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Play&family=Roboto+Slab:wght@300&family=Source+Sans+Pro:wght@300&family=Varela&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
        
        <div class="title2">Connect with us</div>
        <div class="title3">Personal banking services</div>
        <div class="m">
        <div class="ani">
            <p>Dear Customers, Scheduled maintenance of MO BANK Internet Banking services has been planned on 24-Feb-2023 11:00 PM till 25-Feb-2023 00:00 AM. Internet banking services will be unavailable for MO BANK customers during this period. Kindly plan your activities accordingly. *** As per the RBI’s directives, All the IB customers mandatorily register their mobile for electronic transactions. Internet banking facilities of the customers where mobile number is not registered has been discontinued. Please register your mobile number with the nearest branch to activate internet banking services</p>
        </div>
        </div>
        <div class="main">
        <form action="form.php" method="get">
            <div class="senior">
                <span><i class="fa fa-save"></i></span>
                <h3>Saving Account</h3>
                <input name="s" type="submit" value="Click">
            </div>
            <div class="senior">
                <span><i class="fa fa-user"></i></span>
                <h3>Current Account</h3>
                <input name="c" type="submit" value="Click">
            </div>
            <div class="senior">
                <span><i class="fa fa-credit-card"></i></span>
                <h3>Bussiness Account</h3>
                <input name="b" type="submit" value="Click">
            </div>
            <div class="senior">
                <span><i class="fa fa-save"></i></span>
                <h3>Kids Account</h3>
                <input name="k" type="submit" value="Click">
            </div>
</form>
        </div>
        <div class="main2">
            <div class="ben"><h1>Customer Benifits</h1></div>
            <div class="benifit">
                <div class="com">
                    <h3>No Charges</h3>
                    <li>No additional charges</li>
                    <li>No charges for Account opening</li>
                    <li>No charges for any benifits</li>
                </div>
                <div class="com">
                    <h3>Secured</h3>
                    <li>Secured from all malware</li>
                    <li>Your valuable information</li>
                    <li>Your data and money</li>
                </div>
                <div class="com">
                    <h3>Easy to Handle</h3>
                    <li>Very easy to handle Accounts</li>
                    <li>Easy to handle transactions</li>
                    <li>Easy to operate</li>
                </div>
                <div class="com">
                    <h3>Unlimited Benifits</h3>
                    <li>More than one account facility</li>
                    <li>Adhaar based transections</li>
                    <li>Free customer care</li>
                </div>
            </div>
        </div>
    </section>
</body>
</html>