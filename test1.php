<?php

$conn=mysqli_connect('localhost','root','','bank');
if(!$conn){
	echo "Database not connected";
}
else{
  $acc=955206834257;
  $query="SELECT Photo FROM account WHERE Account_No='$acc'";
	$result=mysqli_query($conn,$query);
	if($result){
		$row=mysqli_fetch_assoc($result);
    ?>
    <img src="./image/<?php echo $row['Photo'];?>" alt="" width="80%" height="90%">
    <?php
  }
}
?>