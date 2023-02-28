<?php

include "config.php";
$ID = $_POST['id'];
$List = $_POST['list'];
mysqli_query($con, "UPDATE `tbltodo` SET `list` = '$List' WHERE `tbltodo`.`Id` = '$ID'");
header("location:index.php");