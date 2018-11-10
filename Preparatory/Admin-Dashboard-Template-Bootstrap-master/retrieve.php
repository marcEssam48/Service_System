<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script type="text/javascript" href="bootstrap.min.js"></script>
<?php
include 'Uifunctions.php';
$connect = mysqli_connect('localhost','root','','prep');
$redirect = new Uifunctions();

if(isset($_POST['edit'])){
    $name = $_POST['name'];
    $st_no = $_POST['st_no'];
    $st_name = $_POST['st_name'];
    $flat_level = $_POST['flat_level'];
    $flat_no = $_POST['flat_no'];
    $telephone = $_POST['tel'];
    $mobile  = $_POST['mobile'];
    $fmob = $_POST['fmob'];
    $mmob = $_POST['Mmob'];
    $father = $_POST['confess'];
    $usertype  = $_POST['choice'];
    $id  = $_POST['id'];
    $shamas = $_POST['shamas'];
    $school = $_POST['school'];
    $servant = $_POST['servantm'];



    $sql1 = "UPDATE user SET st_no = '$st_no' WHERE id = $id";
    $sql2 = "UPDATE user SET telephone = '$telephone' WHERE id = $id";
    $sql3 = "UPDATE user SET mobile = '$mobile' WHERE id = $id";
    $sql4 = "UPDATE user SET fmob = '$fmob' WHERE id = $id ";
    $sql5 = "UPDATE user SET mmob = '$mmob' WHERE id = $id ";
    $sql6 = "UPDATE user SET father = '$father' WHERE id = $id ";
    $sql7 = "UPDATE user SET usertype = '$usertype' WHERE id = $id ";
    $sql8 = "UPDATE user SET name = '$name' WHERE id = $id";
    $sql9 = "UPDATE user SET shamas = '$shamas' WHERE id = $id";
    $sql10 = "UPDATE user SET school = '$school' WHERE id = $id";
    $sql11 = "UPDATE user SET st_name = '$st_name' WHERE id = $id";
    $sql12 = "UPDATE user SET flat_level = '$flat_level' WHERE id = $id";
    $sql13 = "UPDATE user SET flat_no = '$flat_no' WHERE id = $id";

    $result1 = mysqli_query($connect,$sql1);
    $result2 = mysqli_query($connect,$sql2);
    $result3 = mysqli_query($connect,$sql3);
    $result4 = mysqli_query($connect,$sql4);
    $result5 = mysqli_query($connect,$sql5);
    $result6 = mysqli_query($connect,$sql6);
    $result7 = mysqli_query($connect,$sql7);
    $result8 = mysqli_query($connect,$sql8);
    $result9 = mysqli_query($connect,$sql9);
    $result10 = mysqli_query($connect,$sql10);
    $result11 = mysqli_query($connect,$sql11);
    $result12 = mysqli_query($connect,$sql12);
    $result13 = mysqli_query($connect,$sql13);

    if($result1){
        $msg = "<div class=' alert alert-success'> Data updated Successfully </div>";
        $redirect->redirectHome($msg,'index.php');
        echo "<br>";
    }
    else{
        echo "Please Enter Address";
    }
    if($result2){
        $msg = "<div class=' alert alert-success'> Data updated Successfully </div>";
        $redirect->redirectHome($msg,'index.php');
        echo "<br>";
    }
    else{
        echo "Please Enter Telephone";
    }
    if($result3){
        $msg = "<div class=' alert alert-success'> Data updated Successfully </div>";
        $redirect->redirectHome($msg,'index.php');
        echo "<br>";
    }
    else{
        echo "Please Enter Mobile";
    }
    if($result4){
        $msg = "<div class=' alert alert-success'> Data updated Successfully </div>";
        $redirect->redirectHome($msg,'index.php');
        echo "<br>";
    }
    else{
        echo "Please Enter Father's Number";
    }
    if($result5){
        $msg = "<div class=' alert alert-success'> Data updated Successfully </div>";
        $redirect->redirectHome($msg,'index.php');
        echo "<br>";
    }
    else{
        echo "Please Enter Mother's Number";
    }
    if($result6){
        $msg = "<div class=' alert alert-success'> Data updated Successfully </div>";
        $redirect->redirectHome($msg,'index.php');
        echo "<br>";
    }
    else{
        echo "Please Enter Father of Confession Name";
    }
    if($result7){
        $msg = "<div class=' alert alert-success'> Data updated Successfully </div>";
        $redirect->redirectHome($msg,'index.php');
        echo "<br>";
    }
    else{
        echo "Please Enter User Type";
    }
    if($result8){
        $msg = "<div class=' alert alert-success'> Data updated Successfully </div>";
        $redirect->redirectHome($msg,'index.php');
        echo "<br>";
    }
    else{
        echo "Please Enter Name";
    }


}

?>