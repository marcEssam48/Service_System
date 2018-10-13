
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <script type="text/javascript" href="bootstrap.min.js"></script>
<?php
include 'Uifunctions.php';
$connect = mysqli_connect('localhost','root','','prep');
$redirect = new Uifunctions();

if(isset($_POST['attend'])){
    $name = $_POST['name'];
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * From user WHERE name = '$name'";

$result = $connect->query($sql);

$now = new DateTime();
$week_one = new DateTime("2018/10/7");       #Don't Forget Notification.php
$week_two = new DateTime("2018/10/14");
$week_three = new DateTime("2018/10/21");
$week_four = new DateTime("2018/10/30");

if ($result->num_rows > 0) {
// output data of each row
while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $number = $row['times'];
    $one = $row['week_one'];
    $two = $row['week_two'];
    $three = $row['week_three'];
    $four = $row['week_four'];

    $number ++;
    $attendance = $row['attendance'];
    $attendance = 1;



    $sql1 = "Update user SET times = $number WHERE id = $id";
    $sql2 = "Update user SET attendance = $attendance WHERE id = $id";

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
?>

