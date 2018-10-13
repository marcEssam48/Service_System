<?php
include 'Uifunctions.php';
$connect = mysqli_connect('localhost','root','','prep');
$redirect = new Uifunctions();

if(isset($_POST['go'])) {
    $servant = $_POST['servant'];
    $kid = $_POST['kid'];

    $sql = "UPDATE user set servantm = '$servant' WHERE name = '$kid'";
    $result = mysqli_query($connect,$sql);


if($result){
    $msg = "<div class=' alert alert-success'> Data updated Successfully </div>";
    $redirect->redirectHome($msg,'index.php');
    echo "<br>";

}

   }