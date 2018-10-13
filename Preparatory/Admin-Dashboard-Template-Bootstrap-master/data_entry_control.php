

<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script type="text/javascript" href="bootstrap.min.js"></script><?php
/**
 * Created by PhpStorm.
 * User: Marc_Essam
 * Date: 9/9/18
 * Time: 11:36 PM
 */
include 'Uifunctions.php';
$connect = mysqli_connect('localhost','root','','prep');
$redirect = new Uifunctions();

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $st_no = $_POST['street_number'];
    $st_name = $_POST['street'];
    $flat_level =$_POST['flat_level'];
    $flat_number = $_POST['flat'];
    $telephone = $_POST['tel'];
    $mobile = $_POST['mobile'];
    $fmobile = $_POST['fmob'];
    $Mmobile = $_POST['Mmob'];
    $father = $_POST['confess'];
    $usertype = $_POST['choice'];
    $shamas = $_POST['shamas'];
    $school = $_POST['school'];

    $sql = "INSERT INTO user(name,st_no,st_name,flat_level,flat_no,telephone,mobile,fmob,mmob,father,usertype,shamas,school) VALUES ('$name','$st_no','$st_name','$flat_level','$flat_number','$telephone','$mobile','$fmobile','$Mmobile','$father','$usertype','$shamas','$school') ";


    $result = mysqli_query($connect,$sql);
    if($result){
        $msg = "<div class=' alert alert-success'> Data inserted Successfully </div>";
        $redirect->redirectHome($msg,'index.php');
        echo "<br>";
    }
    else{
        echo "Please Enter Address";
    }


}
        ?>