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
            margin-bottom: 12px;
        }
        input[type=number] {
            width: 70%;
            padding: 12px 20px;
            margin-left: 300px;
            box-sizing: border-box;
            cursor: auto;
            margin-bottom: 12px;
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
<?php
include 'notification.php';
include 'nav.php';
?>
</header>



<form action="Quorum_deue_control.php" method="post">
    <input type="number" name="id" placeholder="Enter Your ID" style="margin-top: 200px;width: 70%;" class="align-baseline"><br><br>
    <input type="submit" name="toneya" value="بالتونية" style="width: 180px;height:40px;margin-top:0px;margin-left: 330px; " class="btn-success">
    <input type="submit" name="without_toneya" value="من غير التونية" style="width: 180px;height:40px;margin-top:0px;margin-left: 30px; " class="btn-success">



</form>
</body>
