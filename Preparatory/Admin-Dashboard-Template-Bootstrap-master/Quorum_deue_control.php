
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script type="text/javascript" href="bootstrap.min.js"></script>
<?php
include 'Uifunctions.php';
$connect = mysqli_connect('localhost','root','','prep');
$redirect = new Uifunctions();

$attPoints = 10;
$tonya = 5;
$without_tonya = 2;

if(isset($_POST['nahda_toneya'])){
    $id = $_POST['id'];
    $sql = "SELECT * From user  ";
    $result = $connect->query($sql);



    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

         $nahda = $row['nahda'] + $tonya;
         $total = $row['nahda'] + $row['eid'] + $row['kiahk'] + $row['bonus'] + $row['att'];

         $sql1 = "UPDATE user SET nahda = '$nahda' WHERE id = '$id'";
         $sql2 = "UPDATE user SET total = '$total' WHERE id = '$id'";
         $result2 = mysqli_query($connect,$sql2);
         $result1= mysqli_query($connect,$sql1);

            if($result1){
                $msg = "<div class=' alert alert-success'> Bonus added Successfully </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
        }

    }

}
if(isset($_POST['nahda_without'])){
    $id = $_POST['id'];
    $sql = "SELECT * From user  ";
    $result = $connect->query($sql);



    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $nahda = $row['nahda'] + $without_tonya;
            $total = $row['nahda'] + $row['eid'] + $row['kiahk'] + $row['bonus'] + $row['att'];

            $sql1 = "UPDATE user SET nahda = '$nahda' WHERE id = '$id'";
            $sql2 = "UPDATE user SET total = '$total' WHERE id = '$id'";
            $result2 = mysqli_query($connect,$sql2);
            $result1= mysqli_query($connect,$sql1);

            if($result1){
                $msg = "<div class=' alert alert-success'> Bonus added Successfully </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
        }

    }

}
if(isset($_POST['kiahk_toneya'])){
    $id = $_POST['id'];
    $sql = "SELECT * From user  ";
    $result = $connect->query($sql);



    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $kiahk = $row['kiahk'] + $tonya;
            $total = $row['nahda'] + $row['eid'] + $row['kiahk'] + $row['bonus'] + $row['att'];

            $sql1 = "UPDATE user SET kiahk = '$kiahk' WHERE id = '$id'";
            $sql2 = "UPDATE user SET total = '$total' WHERE id = '$id'";
            $result2 = mysqli_query($connect,$sql2);
            $result1= mysqli_query($connect,$sql1);

            if($result1){
                $msg = "<div class=' alert alert-success'> Bonus added Successfully </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
        }

    }

}
if(isset($_POST['kiahk_without'])){
    $id = $_POST['id'];
    $sql = "SELECT * From user  ";
    $result = $connect->query($sql);



    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $kiahk = $row['kiahk'] + $without_tonya;
            $total = $row['nahda'] + $row['eid'] + $row['kiahk'] + $row['bonus'] + $row['att'];

            $sql1 = "UPDATE user SET kiahk = '$kiahk' WHERE id = '$id'";
            $sql2 = "UPDATE user SET total = '$total' WHERE id = '$id'";
            $result2 = mysqli_query($connect,$sql2);
            $result1= mysqli_query($connect,$sql1);

            if($result1){
                $msg = "<div class=' alert alert-success'> Bonus added Successfully </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
        }

    }

}
if(isset($_POST['eid_toneya'])){
    $id = $_POST['id'];
    $sql = "SELECT * From user  ";
    $result = $connect->query($sql);



    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $eid = $row['eid'] + $tonya;
            $total = $row['nahda'] + $row['eid'] + $row['kiahk'] + $row['bonus'] + $row['att'];

            $sql1 = "UPDATE user SET eid = '$eid' WHERE id = '$id'";
            $sql2 = "UPDATE user SET total = '$total' WHERE id = '$id'";
            $result2 = mysqli_query($connect,$sql2);
            $result1= mysqli_query($connect,$sql1);

            if($result1){
                $msg = "<div class=' alert alert-success'> Bonus added Successfully </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
        }

    }

}

if(isset($_POST['eid_without'])){
    $id = $_POST['id'];
    $sql = "SELECT * From user  ";
    $result = $connect->query($sql);



    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $eid = $row['eid'] + $without_tonya;
            $total = $row['nahda'] + $row['eid'] + $row['kiahk'] + $row['bonus'] + $row['att'];

            $sql1 = "UPDATE user SET eid = '$eid' WHERE id = '$id'";
            $sql2 = "UPDATE user SET total = '$total' WHERE id = '$id'";
            $result2 = mysqli_query($connect,$sql2);
            $result1= mysqli_query($connect,$sql1);

            if($result1){
                $msg = "<div class=' alert alert-success'> Bonus added Successfully </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
        }

    }

}
if (isset($_POST['bonus_added'])){

    $name = $_POST['name'];
    $bonus = $_POST['bonus'];

    $sql = "SELECT * From user  where name = '$name'";
    $result = $connect->query($sql);



    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

        $bonuss = $bonus + $row['bonus'];
        $sql = "UPDATE user SET bonus = '$bonuss' Where name = '$name' ";
        $result = mysqli_query($connect,$sql);

            if($result){
                $msg = "<div class=' alert alert-success'> Bonus added Successfully </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
        }
        }


}
if (isset($_POST['attens'])){

    $name = $_POST['name'];
    $alhan = 10;

    $sql = "SELECT * From user  where name = '$name'";
    $result = $connect->query($sql);



    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $bonuss = $alhan + $row['alhan'];
            $sql = "UPDATE user SET alhan = '$bonuss' Where name = '$name' ";
            $result = mysqli_query($connect,$sql);

            if($result){
                $msg = "<div class=' alert alert-success'> Bonus added Successfully </div>";
                $redirect->redirectHome($msg,'index.php');
                echo "<br>";
            }
        }
    }


}

