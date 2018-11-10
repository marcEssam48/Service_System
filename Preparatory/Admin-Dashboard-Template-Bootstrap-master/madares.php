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
<form action="madares_control.php" method="post">
    <input type="submit" name="mikha" value="القديس ميخائيل" style="font-size: 15px; width: 70%; height: 50px;margin-top: 100px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="maroun" value="المارونية" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="bata" value="البطريركية" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="salle" value="دى لاسال" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="tawfik" value="التوفيق" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="Samarettawfik" value="ثمرة التوفيق" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="galaa" value="الجلاء" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="salam" value="السلام-غمرة" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="sahara" value="صحارا" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="new" value="نيو رمسيس" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="nasr" value="النصر" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="farouk" value="الفاروق عمر" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="farna" value="الفراعنة" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="khorenfesh" value="الخرنفش" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="youssef" value="اليوسيفية" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="ghorous" value="غروس الزيتون" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="talaat" value="طلعت حرب" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="raay" value="الراعى الصالح" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="taky" value="تقى الله حلمى" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="naser" value="الناصر" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">
    <input type="submit" name="nile" value="النيل - العبور" style="font-size: 15px; width: 70%; height: 50px;margin-top: 10px;margin-left: 350px;" class="alert-warning">

</form>
