<?php
session_start();
?>
<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="transaction.css">
    <title></title>
</head>
<body>
    <div class="info">
        <table>
            <tr>
                <th>SR</th>
                <th>sender name</th>
                <th>reciver name</th>
                <th>amount</th>
                <th>status</th>
                </tr>
                <tr>
                    <?php

                    if(isset($_SESSION['name']) && isset($_SESSION['amount']) && isset($_SESSION['status'])){
                        $count=0;
                    ?>
                    <td><?php echo ++$count;?></td>
                    <td>empty</td>
                    <td><?php echo $_SESSION['name'];?></td>
                    <td><?php echo $_SESSION['amount'];?></td>
                    <td><?php echo $_SESSION['status'];?></td>
                    
                    <?php
                    }
                    ?>
                </tr>
                </table>
                </div>
                </section>
                <footer>
        <span>Created By <a href="https://www.codingnepalweb.com">PratikPrakash</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
                </footer>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>