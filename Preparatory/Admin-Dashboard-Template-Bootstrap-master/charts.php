<?php

$connect = mysqli_connect('localhost','root','','prep');


?>
<!DOCTYPE html>


<head>
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


<!--Main Navigation-->


<!-- Navbar -->

<!-- Sidebar -->

<?php
include 'notification.php';
include 'nav.php';
?>
<!-- Sidebar -->

</header>
<!--Main Navigation-->

<!--Main layout-->
<main class="pt-5 mx-lg-5">
    <?php
    include 'church.php';
    ?>
    <!-- Heading -->
    <form action="chart_control.php" method ="post">
    <label for="fname" style="margin-left: 900px;margin-top: 50px;">الأسم</label>

    <!--Grid row-->
        <select style="margin-left: 300px; width: 70%;padding: 12px 20px; " name="choice">

                <?php
                $sql = "SELECT name FROM user WHERE usertype !=10";
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

        </select>
        <input type="submit" name="edit" class="btn btn-success" value=" see chart"
               style="margin-left: 800px;margin-top: 50px;">
    </form>
