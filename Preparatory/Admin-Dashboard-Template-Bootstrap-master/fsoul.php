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
if(isset($_POST['eftekad_one'])){
?>
<form action="vip.php" method="post"  style='margin-top=300px;width=80%;margin-left=100px;overflow-y:scroll;height:700px;display:inline-block;'>

  <input class="alert-warning" type="submit" value="أ/أنطونيوس القس" name="tony" style="margin-left: 450px;margin-top: 100px;padding-top: 12px;padding-bottom: 12px;width: 60%;">
    <input class="alert-warning" type="submit" value="أ/مارك عصام" name="marc" style="margin-left: 450px;margin-top: 50px;padding-top: 12px;padding-bottom: 12px;width: 60%;">
    <input class="alert-warning" type="submit" value="أ/فادي هاني" name="fady" style="margin-left: 450px;margin-top: 50px;padding-top: 12px;padding-bottom: 12px;width: 60%;">
    <input class="alert-warning" type="submit" value="أ/أندرو جورج" name="andrewg" style="margin-left: 450px;margin-top: 50px;padding-top: 12px;padding-bottom: 12px;width: 60%;">
    <input class="alert-warning" type="submit" value="أ/أنطونيوس ماهر" name="tonys" style="margin-left: 450px;margin-top: 50px;padding-top: 12px;padding-bottom: 12px;width: 60%;">
    <input class="alert-warning" type="submit" value="أ/أندرو رشدي" name="andrewr" style="margin-left: 450px;margin-top: 50px;padding-top: 12px;padding-bottom: 12px;width: 60%;">

</form>
<?php
}
?>
<?php
if(isset($_POST['eftekad_two'])){
    ?>
    <form action="vip.php" method="post"  style='margin-top=300px;width=80%;margin-left=100px;overflow-y:scroll;height:700px;display:inline-block;'>

        <input class="alert-warning" type="submit" value="أ/هاني ثابت" name="hany" style="margin-left: 450px;margin-top: 100px;padding-top: 12px;padding-bottom: 12px;width: 60%;">
        <input class="alert-warning" type="submit" value="أ/مينا جورج" name="mina" style="margin-left: 450px;margin-top: 50px;padding-top: 12px;padding-bottom: 12px;width: 60%;">
        <input class="alert-warning" type="submit" value="أ/وهبة كميل" name="wahba" style="margin-left: 450px;margin-top: 50px;padding-top: 12px;padding-bottom: 12px;width: 60%;">
        <input class="alert-warning" type="submit" value="أ/جورج منير" name="george" style="margin-left: 450px;margin-top: 50px;padding-top: 12px;padding-bottom: 12px;width: 60%;">
        <input class="alert-warning" type="submit" value="أ/مكاريوس مجدي" name="mac" style="margin-left: 450px;margin-top: 50px;padding-top: 12px;padding-bottom: 12px;width: 60%;">

    </form>
    <?php
}
?>
<?php
if(isset($_POST['eftekad_three'])){
    ?>
    <form action="vip.php" method="post"  style='margin-top=300px;width=80%;margin-left=100px;overflow-y:scroll;height:700px;display:inline-block;'>

        <input class="alert-warning" type="submit" value=" أ/فرانكو فهمي" name="franco" style="margin-left: 450px;margin-top: 100px;padding-top: 12px;padding-bottom: 12px;width: 60%;">
        <input class="alert-warning" type="submit" value="أ/مينا ميلاد" name="zatoun" style="margin-left: 450px;margin-top: 50px;padding-top: 12px;padding-bottom: 12px;width: 60%;">
        <input class="alert-warning" type="submit" value="أ/كيرلس عزيز" name="kiro" style="margin-left: 450px;margin-top: 50px;padding-top: 12px;padding-bottom: 12px;width: 60%;">
        <input class="alert-warning" type="submit" value="أ/بطرس وجيه" name="peter" style="margin-left: 450px;margin-top: 50px;padding-top: 12px;padding-bottom: 12px;width: 60%;">
        <input class="alert-warning" type="submit" value="أ/مرقس زكريا" name="marcos" style="margin-left: 450px;margin-top: 50px;padding-top: 12px;padding-bottom: 12px;width: 60%;">
        <input class="alert-warning" type="submit" value="أ/أندرو أمير" name="andrewa" style="margin-left: 450px;margin-top: 50px;padding-top: 12px;padding-bottom: 12px;width: 60%;">

    </form>
    <?php
}
?>
