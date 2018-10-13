<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script type="text/javascript" href="bootstrap.min.js"></script>
<?php
/**
 * Created by PhpStorm.
 * User: Marc_Essam
 * Date: 9/11/18
 * Time: 5:27 AM
 */


include 'Uifunctions.php';
$connect = mysqli_connect('localhost','root','','prep');
$redirect = new Uifunctions();

if(isset($_POST['eventing'])){
    $event = $_POST['event'];
    $responsible = $_POST['name'];
    $budget = $_POST['quan'];
    $date = $_POST['date'];

    $sql = "INSERT INTO events (event_name,responsible,budget,date) VALUES ('$event','$responsible','$budget','$date')";
    $result = mysqli_query($connect,$sql);

    if($result) {
        $msg = "<div class=' alert alert-success'> Data updated Successfully </div>";
        $redirect->redirectHome($msg, 'index.php');
        echo "<br>";
    }
    else{
        $msg = "<div class=' alert alert-danger'> Something went wrong </div>";
        $redirect->redirectHome($msg, 'index.php');
        echo "<br>";
    }
}