<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Contact-Us Form With A Map Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Contact-Us<small>      Welcome to the refurbished site of the MO Bank of India</small></h1>
</div>

<!-- Contact-Us Form With A Map - START -->

<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['message'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $message=$_POST['message'];
    $query="INSERT INTO contact(Name,Email,Mobile,Message) VALUES ('$name','$email','$mobile','$message')";
    $result=mysqli_query($conn,$query);
    if($result){
        $success="You have successfully send us message";
    }
    else{
        $error="Please retry";
    }
}
?>
<div class="container">
    <div><h1>Contact Us</h1></div>
    <br />
    <div class="row">
        <div class="col-md-6">
            <div id="googlemap" style="width:100%; height:350px;"></div>
        </div>
        <br />
        <div class="col-md-6">
            <form class="my-form" action="" method="post">
                <div class="form-group">
                    <label for="form-name">Name</label>
                    <input name="name" type="email" class="form-control" id="form-name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="form-email">Email Address</label>
                    <input name="email" type="email" class="form-control" id="form-email" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <label for="form-subject">Mobile Number</label>
                    <input name="mobile" type="text" class="form-control" id="form-subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="form-message">Message</label>
                    <textarea name="message" class="form-control" id="form-message" placeholder="Message"></textarea>
                </div>
                <button class="btn btn-default" type="submit">Contact Us</button>                
            </form>
        </div>
    </div>
</div>

<style>
    .my-form {
        color: #305896;
    }
    .my-form .btn-default {
        background-color: #305896;
        color: #fff;
        border-radius: 0;
    }
    .my-form .btn-default:hover {
        background-color: #4498C6;
        color: #fff;
    }
    .my-form .form-control {
        border-radius: 0;
    }
</style>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    jQuery(function ($) {
        // Google Maps setup
        var googlemap = new google.maps.Map(
            document.getElementById('googlemap'),
            {
                center: new google.maps.LatLng(20.5937, 78.9629),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );
    });
</script>

<!-- Contact-Us Form With A Map - END -->

</div>
<?php
if(isset($success)){
?>
<script>
    Swal.fire({
  title: '<?php echo $success;?>',
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
  footer: '<a href="contact.php">Why do I have this issue?</a>'
})

</script>

<?php
}
?>
</body>
</html>