<?php
/**
 * Created by PhpStorm.
 * User: Marc_Essam
 * Date: 9/10/18
 * Time: 5:36 AM
 */
?>

<!DOCTYPE html>
<html  lang="ar">
<head>
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
<header>

    <!-- Navbar -->
   <?php
   include 'notification.php';
   include 'nav.php';
   ?>
</header>

<p>Padded text fields:</p>

<form action="attendance_control.php" method="post">
    <select style="margin-left: 300px; width: 70%;padding: 12px 20px;margin-top: 100px;" name="name">

        <?php
        $sql = "SELECT name FROM user WHERE usertype = 3 ";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

                echo "<option>";
                echo $row['name'];
                echo "</option>";
            }
        }
        ?>

    </select><br><br><br>


    <input type="submit" name="attend" class="btn btn-success" value=" Submit" style="margin-left: 300px;margin-top: -50px;">

    <br><br><br><br><br><br><br><br><br><br><br><br>
    <input type="submit" name="reset" class="btn btn-success" value=" reset" style="margin-left: 300px;margin-top: -50px;">

    <br><br><br><br><br><br><br><br><br><br><br><br>
    <input type="submit" name="reset_month" class="btn btn-success" value=" reset_month" style="margin-left: 300px;margin-top: -50px;">



</form>

</body>
</html>


