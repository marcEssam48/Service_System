<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script type="text/javascript" href="bootstrap.min.js"></script>
<!DOCTYPE html>
<html lang="ar">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <style>
        input[type=text] {
            width: 70%;
            padding: 12px 20px;
            margin-left: 300px;
            box-sizing: border-box;
            cursor: auto;
        }

        input[type=number] {
            width: 70%;
            padding: 12px 20px;
            margin-left: 300px;
            box-sizing: border-box;
            cursor: auto;
        }
        th {
            padding-top: 120px;
            padding-bottom: 12px;
            text-align: left;
            color: white;
        }

        table{
            border: 1px solid #ddd;
            padding: 8px;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;


        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/logo.jpg" />
    <title>فتيان المذبح</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome-all.min.css  ">

</head>


<body class="grey lighten-3">
<header style="font-size: 17px;position: fixed;">

    <!-- Navbar -->
    <?Php
    include 'notification.php';
    include 'nav.php';
    ?>
</header>

<?php
/**
 * Created by PhpStorm.
 * User: Marc_Essam
 * Date: 9/10/18
 * Time: 4:25 AM
 */


include 'Uifunctions.php';
$connect = mysqli_connect('localhost','root','','prep');
$redirect = new Uifunctions();

?>

</div>
<div class="alert-success" style="overflow-y:scroll;height:730px;width:100%;display:inline-block;margin-left: 340px;">
    <div class="alert-success"  >



    <table style="width:80% ; margin-top: 20px;margin-left: 0px; margin-right: -100px;" class="table table-striped" border="1" >
        <tr style="height: 20px;width: 70%">


            <th style="text-align: center; font-size: 20px; color: #2c0419">السنة</th>
            <th style="text-align: center; font-size: 20px; color: #2c0419">حضور المرة السابقة</th>
            <th style="text-align: center; font-size: 20px; color: #2c0419">عدد مرات الحضور</th>
            <th style="text-align: center; font-size: 20px; color: #2c0419">رقم الموبايل</th>
            <th style="text-align: center; font-size: 20px; color: #2c0419">رقم الشقة</th>
            <th style="text-align: center; font-size: 20px; color: #2c0419">الدور</th>
            <th style="text-align: center; font-size: 20px; color: #2c0419">اسم الشارع</th>
            <th style="text-align: center; font-size: 20px; color: #2c0419">رقم الشارع</th>
            <th style="text-align: center; font-size: 20px; color: #2c0419">الأسم</th>
            <th style="text-align: center; font-size: 20px; color: #2c0419">ID</th>


        </tr>
<?php
echo "<h1 style='margin-top: 100px;margin-left: 500px;'>غير موجودين بالمتابعة</h1>";
$sql = "SELECT * From user WHERE  servantm = '' and usertype != 10 ORDER BY usertype ";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while ($row = $result->fetch_assoc()) {
?>


        <tr>
            <td style="text-align: center; font-size: 15px;"><?php echo $row['usertype'] ?></td>
            <td style="text-align: center; font-size: 15px;"><?php echo $row['attendance'] ?></td>
            <td style="text-align: center; font-size: 15px;"><?php echo $row['times'] ?></td>
            <td style="text-align: center; font-size: 15px;"><?php echo "0" . $row['mobile'] ?></td>
            <td style="text-align: center; font-size: 15px;"><?php echo $row['flat_no'] ?></td>
            <td style="text-align: center; font-size: 15px;"><?php echo $row['flat_level'] ?></td>
            <td style="text-align: center; font-size: 15px;"><?php echo $row['st_name'] ?></td>
            <td style="text-align: center; font-size: 15px;"><?php echo $row['st_no'] ?></td>
            <td style="text-align: center; font-size: 15px;"><?php echo $row['name'] ?></td>
            <td style="text-align: center; font-size: 15px;"><?php echo $row['id'] ?></td>
        </tr>
<?php
}
}

?>
    </table>
</div>
</body>
</html>
