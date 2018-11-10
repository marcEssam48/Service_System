<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script type="text/javascript" href="bootstrap.min.js"></script>
<!DOCTYPE html>
<html lang="ar">
<head>
    <style>

        th {
            padding-top: 12px;
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
<header style="font-size: 17px;position: fixed;" >

    <?php
    include 'notification.php';
    include 'nav.php';
    ?>
</header>

<table style="width:80% ; margin-top: 100px;margin-left: 290px;margin-right: -250px;position: center;" class="table table-striped" border="1">
    <tr>




        <th style="text-align: center; font-size: 20px; color: #2c0419">مخدوم 12</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">مخدوم 11</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">مخدوم 10</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">مخدوم 9</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">مخدوم 8</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">مخدوم 7</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">مخدوم 6</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">مخدوم 5</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">مخدوم 4</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">مخدوم 3</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">مخدوم 2</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">مخدوم 1</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419">الفصل</th>
        <th style="text-align: center; font-size: 20px; color: #2c0419"> أسم الخادم</th>



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

    $sql = "SELECT * From servants ";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
// output data of each row
        while ($row = $result->fetch_assoc()) {
            ?>


            <tr>
                <td style="text-align: center; font-size: 15px;"><?php echo $row['twelve']?></td>
                <td style="text-align: center; font-size: 15px;"><?php echo $row['eleven']?></td>
                <td style="text-align: center; font-size: 15px;"><?php echo $row['ten']?></td>
                <td style="text-align: center; font-size: 15px;"><?php echo $row['nine']?></td>
                <td style="text-align: center; font-size: 15px;"><?php echo $row['eight']?></td>
                <td style="text-align: center; font-size: 15px;"><?php echo $row['seven']?></td>
                <td style="text-align: center; font-size: 15px;"><?php echo $row['six']?></td>
                <td style="text-align: center; font-size: 15px;"><?php echo $row['five']?></td>
                <td style="text-align: center; font-size: 15px;"><?php echo $row['four']?></td>
                <td style="text-align: center; font-size: 15px;"><?php echo $row['three']?></td>
                <td style="text-align: center; font-size: 15px;"><?php echo $row['two']?></td>
                <td style="text-align: center; font-size: 15px;"><?php echo $row['one']?></td>
                <td style="text-align: center; font-size: 15px;"><?php echo $row['role']?></td>
                <td style="text-align: center; font-size: 15px;"><?php echo $row['name']?></td>
            </tr>








            <?php
        }
    }

    ?>

</table>
</body>
</html>