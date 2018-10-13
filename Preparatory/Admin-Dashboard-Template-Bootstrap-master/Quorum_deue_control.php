
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script type="text/javascript" href="bootstrap.min.js"></script>
<?php
include 'Uifunctions.php';
$connect = mysqli_connect('localhost','root','','prep');
$redirect = new Uifunctions();

$attPoints = 1;
$coptPoints = 1;
$alhanPoints = 1;
$maradPoints = 1;
$kiahkPoints = 1;
$odasPoints = 1;
$eidPoints = 1;
$nahdaPoints = 1;

if(isset($_POST['att'])) {
    $id = $_POST['id'];
    if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * From user WHERE id = '$id'";

    $result = $connect->query($sql);


    if ($result->num_rows > 0) {
// output data of each row
        while ($row = $result->fetch_assoc()) {
            $att = $row['att'] + $attPoints;
            $sql1 = "UPDATE user SET att = $att WHERE id = '$id'";
            $result1 = mysqli_query($connect,$sql1);

            if($result1){
                $msg = "<div class=' alert alert-success'> Attended Successfully </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
            else{
                $msg = "<div class=' alert alert-danger'>This name is not registered </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
        }
    }
}
if(isset($_POST['alhan'])) {
    $id = $_POST['id'];
    if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * From user WHERE id = '$id'";

    $result = $connect->query($sql);


    if ($result->num_rows > 0) {
// output data of each row
        while ($row = $result->fetch_assoc()) {
            $alhan = $row['alhan'] + $alhanPoints;
            $sql1 = "UPDATE user SET alhan = $alhan WHERE id = '$id'";
            $result1 = mysqli_query($connect,$sql1);

            if($result1){
                $msg = "<div class=' alert alert-success'> Attended Successfully </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
            else{
                $msg = "<div class=' alert alert-danger'>This name is not registered </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
        }
    }
}
if(isset($_POST['copt'])) {
    $id = $_POST['id'];
    if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * From user WHERE id = '$id'";

    $result = $connect->query($sql);


    if ($result->num_rows > 0) {
// output data of each row
        while ($row = $result->fetch_assoc()) {
            $copt = $row['copt'] + $coptPoints;
            $sql1 = "UPDATE user SET copt = $copt WHERE id = '$id'";
            $result1 = mysqli_query($connect,$sql1);

            if($result1){
                $msg = "<div class=' alert alert-success'> Attended Successfully </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
            else{
                $msg = "<div class=' alert alert-danger'>This name is not registered </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
        }
    }
}
if(isset($_POST['marad'])) {
    $id = $_POST['id'];
    if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * From user WHERE id = '$id'";

    $result = $connect->query($sql);


    if ($result->num_rows > 0) {
// output data of each row
        while ($row = $result->fetch_assoc()) {
            $marad = $row['marad'] + $maradPoints;
            $sql1 = "UPDATE user SET marad = $marad WHERE id = '$id'";
            $result1 = mysqli_query($connect,$sql1);

            if($result1){
                $msg = "<div class=' alert alert-success'> Attended Successfully </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
            else{
                $msg = "<div class=' alert alert-danger'>This name is not registered </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
        }
    }
}
if(isset($_POST['cermony'])){
    header('Location: cermony.php');

}

if(isset($_POST['kiahk'])) {
    $id = $_POST['id'];
    if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * From user WHERE id = '$id'";

    $result = $connect->query($sql);


    if ($result->num_rows > 0) {
// output data of each row
        while ($row = $result->fetch_assoc()) {

            $kiahk = $row['kiahk'] + $kiahkPoints;
            $sql1 = "UPDATE user SET kiahk = $kiahk WHERE id = '$id'";
            $result1 = mysqli_query($connect,$sql1);
            $cermony = $kiahk + $row['nahda'] + $row['eid'];
            $sql2 = "UPDATE user SET cermony = $cermony WHERE id = '$id'";
            $result2 = mysqli_query($connect,$sql2);

            if($result1){
                $msg = "<div class=' alert alert-success'> Attended Successfully </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
            else{
                $msg = "<div class=' alert alert-danger'>This name is not registered </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
        }
    }
}
if(isset($_POST['odas'])) {
    $id = $_POST['id'];
    if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * From user WHERE id = '$id'";

    $result = $connect->query($sql);


    if ($result->num_rows > 0) {
// output data of each row
        while ($row = $result->fetch_assoc()) {

            $odas = $row['eid'] + $odasPoints;
            $sql1 = "UPDATE user SET eid = $odas WHERE id = '$id'";
            $result1 = mysqli_query($connect,$sql1);
            $cermony = $row['kiahk'] + $row['nahda'] + $odas;
            $sql2 = "UPDATE user SET cermony = $cermony WHERE id = '$id'";
            $result2 = mysqli_query($connect,$sql2);

            if($result1){
                $msg = "<div class=' alert alert-success'> Attended Successfully </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
            else{
                $msg = "<div class=' alert alert-danger'>This name is not registered </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
        }
    }
}
if(isset($_POST['nahda'])) {
    $id = $_POST['id'];
    if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * From user WHERE id = '$id'";

    $result = $connect->query($sql);


    if ($result->num_rows > 0) {
// output data of each row
        while ($row = $result->fetch_assoc()) {

            $nahda = $row['nahda'] + $nahdaPoints;
            $sql1 = "UPDATE user SET nahda = $nahda WHERE id = '$id'";
            $result1 = mysqli_query($connect,$sql1);
            $cermony = $row['kiahk'] + $nahda + $row['eid'];
            $sql2 = "UPDATE user SET cermony = $cermony WHERE id = '$id'";
            $result2 = mysqli_query($connect,$sql2);

            if($result1){
                $msg = "<div class=' alert alert-success'> Attended Successfully </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
            else{
                $msg = "<div class=' alert alert-danger'>This name is not registered </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
        }
    }
}