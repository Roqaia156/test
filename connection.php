<?php
include "index.html";
$Robotarm1= mysqli_connect("localhost","root","") or die(mysqli_error($Robotarm1));
mysqli_select_db($Robotarm1 , "robotarm")or die(mysqli_error($Robotarm1));

if(isset($_POST["submit"])){
    mysqli_query($Robotarm1,"insert into robotcontrol values('$_POST[eng1]','$_POST[eng2]','$_POST[eng3]',
    '$_POST[eng4]','$_POST[eng5]','$_POST[eng6]','start')");
}

?>