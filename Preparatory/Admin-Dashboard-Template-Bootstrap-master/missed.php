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
<!--
<div class="panel-heading">
    <h3 class="panel-title" style="line-height:35px;margin-left: 750px; margin-top: 70px;">Source code : PHP export to Excel or CSV file
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-info">Action</button>
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" role="menu" id="export-menu">
                <li id="export-to-excel"><a href="#">Export to excel</a></li>
                <li id="export-to-csv"><a href="#">Export to csv</a></li>
                <li class="divider"></li>
                <li><a href="#">Other</a></li>
            </ul>
        </div>
    </h3>
</div>

<div class="panel-body">
    <form action="download.php" method="post" id="export-form">
        <input type="hidden" value='' id='hidden-type' name='ExportType'/>
    </form>
    -->

    <table style="width:80% ; margin-top: 100px;margin-left: 270px; margin-right: -100px;overflow-y:scroll;height:600px;display:block;" class="table table-striped" border="1" >
    <tr style="height: 20px;width: 70%">




        <th style="text-align: center; font-size: 20px; color: #2c0419">الشموسية</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">المدرسة</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">أب الاعتراف</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">السنة</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">رقم الشقة</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">الدور</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">اسم الشارع</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">رقم الشارع</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">موبايل الأب</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">موبايل الأم</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">الموبايل</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">التليفون</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">الأسم</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">ID</th>


    </tr>
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

    if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }
    if(isset($_POST['eftekad_one'])) {
    $sql = "SELECT * From user WHERE usertype = 1 and attendance = 0 ORDER BY usertype";
    $result = $connect->query($sql);



        if ($result->num_rows > 0) {
// output data of each row
            while ($row = $result->fetch_assoc()) {
                ?>


                <tr>


                    <td style="text-align: center; font-size: 15px;"><?php echo $row['shamas'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['school'] ?></td>
                    <td style="text-align: center; font-size: 15px;">أ/<?php echo $row['father'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['usertype'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['flat_no'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['flat_level'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['st_name'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['st_no'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['fmob'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['mmob'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['mobile'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['telephone'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['name'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['id'] ?></td>
                </tr>


                <?php
            }
        }
    }
    if(isset($_POST['eftekad_two'])) {
        $sql = "SELECT * From user WHERE usertype = 2 and attendance = 0 ORDER BY usertype";
        $result = $connect->query($sql);



        if ($result->num_rows > 0) {
// output data of each row
            while ($row = $result->fetch_assoc()) {
                ?>


                <tr>


                    <td style="text-align: center; font-size: 15px;"><?php echo $row['shamas'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['school'] ?></td>
                    <td style="text-align: center; font-size: 15px;">أ/<?php echo $row['father'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['usertype'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['flat_no'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['flat_level'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['st_name'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['st_no'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['fmob'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['mmob'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['mobile'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['telephone'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['name'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['id'] ?></td>
                </tr>


                <?php
            }
        }
    }
    if(isset($_POST['eftekad_three'])) {
        $sql = "SELECT * From user WHERE usertype = 3 and attendance = 0 ORDER BY usertype";
        $result = $connect->query($sql);



        if ($result->num_rows > 0) {
// output data of each row
            while ($row = $result->fetch_assoc()) {
                ?>


                <tr>


                    <td style="text-align: center; font-size: 15px;"><?php echo $row['shamas'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['school'] ?></td>
                    <td style="text-align: center; font-size: 15px;">أ/<?php echo $row['father'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['usertype'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['flat_no'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['flat_level'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['st_name'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['st_no'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['fmob'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['mmob'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['mobile'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['telephone'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['name'] ?></td>
                    <td style="text-align: center; font-size: 15px;"><?php echo $row['id'] ?></td>
                </tr>


                <?php
            }
        }
    }
    ?>

</table>
</body>
<!--
<script>
    $(document).ready(function() {

jQuery('#export-menu li').bind("click", function() {
var target = $(this).attr('id');
switch(target) {
case 'export-to-excel' :
$('#hidden-type').val(target);
//alert($('#hidden-type').val());
$('#export-form').submit();
$('#hidden-type').val('');
break
case 'export-to-csv' :
$('#hidden-type').val(target);
//alert($('#hidden-type').val());
$('#export-form').submit();
$('#hidden-type').val('');
break
}
});
});
-->
    </script>

</html>