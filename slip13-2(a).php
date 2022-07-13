<?php
/*
Create a form to accept Employee details and display it in next page.(Use sticky form concept)
*/

session_start();
$_SESSION['eno']=$_POST['eno'];
$_SESSION['name']=$_POST['name'];
$_SESSION['addr']=$_POST['addr'];
echo"Hello ".$_SESSION['name'];
echo "<br/>" . "Your id is = " . $_SESSION['eno'];
echo "<br/>" . "Your address = " . $_SESSION['addr'];
