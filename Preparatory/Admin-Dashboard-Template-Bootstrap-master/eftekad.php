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
<form action="fsoul.php" method="post">
    <input type="submit" name="eftekad_one" value="افتقاد اولي اعدادي" style="font-size: 15px; width: 70%; height: 50px;margin-top: 100px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="eftekad_two" value="افتقاد ثانية اعدادي" style="font-size: 15px; width: 70%; height: 50px;margin-top: 100px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="eftekad_three" value="افتقاد ثالثة اعدادي" style="font-size: 15px; width: 70%; height: 50px;margin-top: 100px;margin-left: 350px;" class="alert-warning">

</form>
