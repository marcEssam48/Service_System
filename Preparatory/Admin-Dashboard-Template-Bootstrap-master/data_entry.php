
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
<?php
include 'notification.php';
include 'nav.php';
?>
</header>

<p>Padded text fields:</p>

<form action="data_entry_control.php" method="post">
    <label for="fname" style="margin-left: 1150px;margin-top: 50px;">الأسم</label>
    <input type="text" id="fname" name="name" placeholder="Enter Name">
    <label for="lname" style="margin-left: 1150px;margin-top: 50px;">رقم الشارع</label>
    <input type="text" id="lname" name="street_number" placeholder="Enter Address">
    <label for="lname" style="margin-left: 1150px;margin-top: 50px;">الشارع</label>
    <input type="text" id="lname" name="street" placeholder="Enter Address">
    <label for="lname" style="margin-left: 1150px;margin-top: 50px;">الدور</label>
    <input type="text" id="lname" name="flat_level" placeholder="Enter Address">
    <label for="lname" style="margin-left: 1150px;margin-top: 50px;">رقم الشقة</label>
    <input type="text" id="lname" name="flat" placeholder="Enter Address">
    <label for="lname" style="margin-left: 1150px;margin-top: 50px;">رقم التليفون</label>
    <input type="number" id="tele" name="tel" placeholder="Enter Telephone">
    <label for="lname" style="margin-left: 1150px;margin-top: 50px;">رقم الموبايل</label>
    <input type="number" id="mob" name="mobile" placeholder="Enter mobile">
    <label for="lname" style="margin-left: 1150px;margin-top: 50px;">رقم موبايل الأب</label>
    <input type="number" id="father" name="fmob" placeholder="Enter Father's Mobile">
    <label for="lname" style="margin-left: 1150px;margin-top: 50px;">رقم موبايل الأم</label>
    <input type="number" id="Mother" name="Mmob" placeholder="Enter Mother's MObile">
    <label for="lname" style="margin-left: 1150px;margin-top: 50px;">اب الاعتراف</label>
    <input type="text" id="conf" name="confess" placeholder="Father's Name">
    <label for="lname" style="margin-left: 1150px;margin-top: 50px;">نوع المستخدم</label>
    <input type="number" id="choose" name="choice" placeholder="Enter 1 or 2 or 3 or 10 ...." required>
    <label for="lname" style="margin-left: 1150px;margin-top: 50px;">الشموسية</label>
    <input type="number" id="chosen" name="shamas" placeholder="Enter 1 for yes 0 for no">
    <label for="lname" style="margin-left: 1150px;margin-top: 50px;">المدرسة</label>
    <input type="text" id="school" name="school" placeholder="Enter your School">


    <br><br><br>


    <input type="submit" name="submit" class="btn btn-success" value=" Submit" style="margin-left: 300px;margin-top: -50px;">


</form>

</body>
</html>

