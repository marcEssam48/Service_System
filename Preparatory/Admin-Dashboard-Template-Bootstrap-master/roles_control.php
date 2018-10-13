
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script type="text/javascript" href="bootstrap.min.js"></script>

<?php
include 'Uifunctions.php';
$connect = mysqli_connect('localhost','root','','prep');
$redirect = new Uifunctions();

if(isset($_POST['enroll'])) {
    $name = $_POST['name'];
    $selection = $_POST['choice'];



            $sql1 = "UPDATE user SET role = $selection WHERE name = '$name'";
            $result1 = mysqli_query($connect,$sql1);

            if($result1){
                $msg = "<div class=' alert alert-success'> Data updated Successfully </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
            else{
                echo "Please Enter Address";
            }





}
    ?>