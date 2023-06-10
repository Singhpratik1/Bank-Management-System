<?php
session_start();
?>
<?php
if(isset($_SESSION['name'])){
    echo $_SESSION['name'];
}

?>