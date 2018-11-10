
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <script type="text/javascript" href="bootstrap.min.js"></script>
<?php
include 'Uifunctions.php';
$connect = mysqli_connect('localhost','root','','prep');
$redirect = new Uifunctions();
$attPoints = 5;
$bonusPoints = 5;
$name = $_POST['name'];

if(isset($_POST['attend'])){

if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * From user WHERE name = '$name'";

$result = $connect->query($sql);

$now = new DateTime();
$week_one = new DateTime("2018/11/7");       #Don't Forget Notification.php
$week_two = new DateTime("2018/11/14");
$week_three = new DateTime("2018/11/21");
$week_four = new DateTime("2018/11/30");

if ($result->num_rows > 0) {
// output data of each row
while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $number = $row['times'];
    $one = $row['week_one'];
    $two = $row['week_two'];
    $three = $row['week_three'];
    $four = $row['week_four'];
    $att = $row['att'] + $attPoints;
    $number ++;
    $attendance = $row['attendance'];
    $attendance = 1;
    $wara = $row['attendance_waraa']+5;
    $total = $row['nahda'] + $row['eid'] + $row['kiahk'] + $row['bonus'] + $row['att']+$row['total'];

if($row['attendance'] == 0) {
    $sql1 = "Update user SET times = $number WHERE id = $id";
    $sql2 = "Update user SET attendance = $attendance WHERE id = $id";
    $result1 = mysqli_query($connect,$sql1);
    $result2 = mysqli_query($connect,$sql2);

    if($result1){
        $msg = "<div class=' alert alert-success'> Attended Successfully </div>";
        $redirect->redirectHome($msg,'index.php');
        echo "<br>";
    }
    else{
        echo "Please Enter Address";
    }
    if($result2){
        $msg = "<div class=' alert alert-success'> Attended updated Successfully </div>";
        $redirect->redirectHome($msg,'index.php');
        echo "<br>";
    }
    else{
        echo "Please Enter Address";
    }
}

    #$sql4 = "Update user SET att = '$att'  where id = '$id'"
    #$result4 = mysqli_query($connect,$sql4);;

    if($now <= $week_one){

        $sql3 = "Update user SET week_one = 1 WHERE name = '$name'";
        $result3 = mysqli_query($connect,$sql3);
    }
    if($week_one <= $now && $now <= $week_two){

        $sql3 = "Update user SET week_two = '1' WHERE id = $id";
        $result3 = mysqli_query($connect,$sql3);
    }
    if($week_two <= $now && $now <= $week_three){

        $sql3 = "Update user SET week_three = 1 WHERE id = $id";
        $result3 = mysqli_query($connect,$sql3);
    }
    if($week_three <= $now && $now <= $week_four){

        $sql3 = "Update user SET week_four = 1 WHERE id = $id";
        $result3 = mysqli_query($connect,$sql3);
    }






}
}
else{
    $msg = "<div class=' alert alert-danger'>This name is not registered </div>";
    $redirect->redirectHome($msg,'index.php');
    echo "<br>";
}

}
if(isset($_POST['reset'])){
$name = $_POST['name'];
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * From user ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    while ($row = $result->fetch_assoc()) {
        $attendance = $row['attendance'];
        $attendance = 0;

        $sql3 = "Update user SET attendance = $attendance WHERE 1";

        $result3 = mysqli_query($connect,$sql3);
        $sql9 = "UPDATE user SET total = '$total' WHERE id = '$id'";
        $result9 = mysqli_query($connect,$sql9);

        if($result3){
            $msg = "<div class=' alert alert-success'> reset Successfully </div>";
            $redirect->redirectHome($msg,'index.php');
            echo "<br>";
        }
        else{
            echo "Please Enter Address";
        }
    }
}

}
if (isset($_POST['reset_month']))
{
    $sql4 = "UPDATE user SET week_one = '0' ";
    $sql5 = "UPDATE user SET week_two = '0' ";
    $sql6 = "UPDATE user SET week_three = '0' ";
    $sql7 = "UPDATE user SET week_four = '0' ";

    $result4 = mysqli_query($connect,$sql4);
    $result5 = mysqli_query($connect,$sql5);
    $result6 = mysqli_query($connect,$sql6);
    $result7 = mysqli_query($connect,$sql7);

    if($result4){
        $msg = "<div class=' alert alert-success'> reset Successfully </div>";
        $redirect->redirectHome($msg,'index.php');
        echo "<br>";
    }
    if($result5){
        $msg = "<div class=' alert alert-success'> reset Successfully </div>";
        $redirect->redirectHome($msg,'index.php');
        echo "<br>";
    }
    if($result6){
        $msg = "<div class=' alert alert-success'> reset Successfully </div>";
        $redirect->redirectHome($msg,'index.php');
        echo "<br>";
    }
    if($result7){
        $msg = "<div class=' alert alert-success'> reset Successfully </div>";
        $redirect->redirectHome($msg,'index.php');
        echo "<br>";
    }
}
if(isset($_POST['bonus_quorum'])){

    if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * From user WHERE name = '$name'";

    $result8 = $connect->query($sql);

if ($result8->num_rows > 0) {
// output data of each row
while ($row = $result8->fetch_assoc()) {
    $id = $row['id'];
$bonus = $row['bonus'] + $bonusPoints;
$total = $row['nahda'] + $row['eid'] + $row['kiahk'] + $row['bonus'] + $row['att']+$row['total'];
$sql2 = "UPDATE user set bonus = '$bonus' WHERE name = '$name'";
    $sql3 = "UPDATE user SET total = '$total' WHERE id = '$id'";
    $result9 = mysqli_query($connect,$sql3);
$result8 = mysqli_query($connect,$sql2);


    if($result8){
        $msg = "<div class=' alert alert-success'> Bonus added Successfully </div>";
        $redirect->redirectHome($msg,'index.php');
        echo "<br>";
    }
}
}


}

?>

