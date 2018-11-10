<?php
include 'Uifunctions.php';
$connect = mysqli_connect('localhost','root','','prep');
$redirect = new Uifunctions();

?>
<!DOCTYPE html>
<html lang="en">

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
    <style type="text/css">
        div.image {max-width: 256px;max-height: 256px;background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSItNzYgMCA1MTIgNTEyIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij48cGF0aCBkPSJtMjI1IDUxMnYtMzAxaDEzNXYtOTBoLTEzNXYtMTIxaC05MHYxMjFoLTEzNXY5MGgxMzV2MzAxem0wIDAiIGZpbGw9IiMwMDAwMDAiLz48L3N2Zz4K)}</style>
    <style type="text/css">div.image {max-width: 256px;max-height: 256px;background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDE5LjY3NiAxOS42NzYiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDE5LjY3NiAxOS42NzY7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8cGF0aCBkPSJNMTAuMzM1LDAuODE5YzAuMDUxLDAuMDQxLDAuMDYzLDAuMTQ1LDAuMDk3LDAuMTQ5YzAuMDM4LDAuMDA1LDAuMTUtMC4wMSwwLjE5Mi0wLjA0OCAgIGMwLjA0My0wLjAzOCwwLjA3NC0wLjAzOCwwLjA3NC0wLjA4OWMwLTAuMDUzLTAuMDQ4LTAuMTE2LTAuMDYzLTAuMTZjLTAuMDE0LTAuMDQxLTAuMTc0LTAuMDQ3LTAuMjM3LTAuMDQ3ICAgYy0wLjA2MiwwLTAuMTA1LDAuMDQzLTAuMTA1LDAuMDQzQzEwLjI2LDAuNjg0LDEwLjIzOSwwLjc1MSwxMC4zMzUsMC44MTl6IE0xOC43OTksMy4wNTdjLTAuMDk4LTAuMDY1LTAuODkyLDAuMDMtMC44OTIsMC4wMyAgIHMwLjI3MS0wLjEyNiwwLjI4NS0wLjIwN2MwLjAxNi0wLjA3OS0wLjYwNCwwLjExMi0wLjgxMiwwLjE2Yy0wLjIwNiwwLjA0Ny0wLjQ0MiwwLjIwNi0wLjQ0MiwwLjIwNmwtMC4zMDMsMC4wOCAgIGMwLDAtMS43NDgsMC4wMzItMi4yODksMC4wMzJjLTAuNTM5LDAtMS40NjItMC4yODctMi4wMzMtMC40OTNjLTAuNTcxLTAuMjA4LTEuMjg2LTAuMTkxLTEuMjg2LTAuMTkxcy0wLjExMi0wLjMzMy0wLjExMi0wLjQ1OSAgIGMwLTAuMTI3LTAuMDE2LTAuNzY0LTAuMDQ2LTEuNDc5Yy0wLjAzMy0wLjcxNS0wLjYwNS0wLjc4NC0wLjk1OS0wLjcxNWMtMC41NzcsMC4xMTItMC42LDAuNzE0LTAuNjMxLDEuMTYgICBjLTAuMDMsMC40NDQtMC4yMzcsMS40NzYtMC4yMzcsMS40NzZzLTAuMTYxLTAuMDE1LTAuNTU3LDBjLTAuMzk5LDAuMDE2LTEuMDIsMC4zMDMtMS4zMiwwLjIzOSAgIGMtMC4zMDEtMC4wNjItMS4wMTgsMC4xMS0xLjE5LDAuMTc0Yy0wLjE3NiwwLjA2NC0yLjY0LDAuMDMxLTIuODEyLDAuMDMxYy0wLjE3OCwwLTAuMzk4LTAuMTU4LTAuNjIxLTAuMjY3ICAgQzIuMzIsMi43MjEsMS45MDcsMi43MzgsMS43MDEsMi43NTRDMS40OTQsMi43NjksMS41NTgsMi45NDMsMS41NTgsMi45NDNzLTAuMjU0LTAuMDE1LTAuNDE1LDBDMC45ODYsMi45NiwwLjcxNSwyLjk5MiwwLjc4LDMuMTk5ICAgYzAuMDYyLDAuMjA4LDEuMTQ1LDAuNDI4LDEuNTA4LDAuNDQ0QzIuNjU0LDMuNjYsMy4wODMsMy42OSwzLjA4MywzLjY5UzMuMjQsMy45NzYsMy40NDgsNC4zMUMzLjY1Miw0LjY0Myw0LjI5LDUuMjQ4LDQuMjksNS4yNDggICBTNC43MzMsNS4xODUsNS4xLDUuMTg1YzAuMzY3LDAsMC42NjgtMC4wNjMsMC45MDYsMC4wNDlDNi4yNDMsNS4zNDQsNy41OCw1LjY0NSw3LjU4LDUuNjQ1TDcuMzczLDguNTM4ICAgYzAsMCwwLjI1NCwwLjAzLDAuMjU0LDAuMjIyYzAsMC4xOSwwLjE0NSwwLjM1LDAuMTQ1LDAuMzVMNy43LDE2LjMzMmwtMC45ODgsMC4yNzdsLTAuMDQ4LDAuNTU1TDYuMjcsMTcuMzI2bC0wLjMwMiwyLjM1aDguMzc4ICAgbC0wLjI5OC0yLjM1bC0wLjM5Ni0wLjE2MmwtMC4wNDktMC41NTVsLTAuOTI3LTAuMjU5bC0wLjIxOS0yLjQ3NGwwLjIyMS0wLjA4bC0wLjAzMS0yLjIwN2wwLjE5Mi0wLjE5MmwtMC4zOTgtNS43MzQgICBjMCwwLDAuNjY3LTAuMDY1LDEuMjQtMC4yMjNjMC41NzEtMC4xNjEsMi4xMjgtMC4wOTYsMi4xMjgtMC4wOTZzMC4xNzQtMC4wMzIsMC40NDQtMC4zMzVjMC4yNzEtMC4zMDIsMC4zNjctMS4wOCwwLjM2Ny0xLjA4ICAgczAuMy0wLjA3OSwwLjU3LTAuMDk1YzAuMjctMC4wMTUsMS4xMTEtMC4xNzQsMS40NzgtMC4zNjVDMTkuMDM1LDMuMjc3LDE4Ljg5MiwzLjExOSwxOC43OTksMy4wNTd6IE05LjY1MSwwLjQ4MSAgIGMwLDAsMC4wOS0wLjE4MywwLjM0NC0wLjIxNGMwLjI1NC0wLjAzMiwwLjUzMiwwLjAzNCwwLjYyNywwLjEzNGMwLjA5NywwLjEwMiwwLjEyNCwwLjU2NiwwLjEzLDAuNjU2ICAgYzAuMDA1LDAuMDktMC4wNTgsMC41NzMtMC4xNTIsMC42OWMtMC4wOTcsMC4xMTctMC4yMjcsMC4yMjItMC4yODYsMC4xOXMtMC4xMDgtMC4xMTYtMC4xODctMC4xMjIgICBjLTAuMDgxLTAuMDA0LTAuMTY4LDAuMDA2LTAuMTUzLTAuMDc5YzAuMDE2LTAuMDg1LDAuMTItMC4yOTEsMC4yMDYtMC4yOTFjMC4wODQsMCwwLjExNywwLDAuMTQ4LDAuMDI2ICAgYzAuMDMyLDAuMDI3LDAuMDk1LDAuMDI3LDAuMDk1LDAuMDI3czAuMDQyLTAuMDgzLTAuMDItMC4xNThjLTAuMDY2LTAuMDc2LTAuMTQzLTAuMTEyLTAuMTQzLTAuMTEyczAtMC4xOS0wLjA1NS0wLjIwNiAgIGMtMC4wNTItMC4wMTctMC4xMTEtMC4wMDUtMC4xMTEtMC4wMDVzMC4wMzMtMC4zMDcsMC4wMTEtMC4zNTVjLTAuMDItMC4wNDktMC4wMi0wLjA5NS0wLjEwMS0wLjEwMSAgIGMtMC4wOC0wLjAwNi0wLjE4Ni0wLjAxNS0wLjI1NCwwQzkuNjgxLDAuNTc3LDkuNTgxLDAuNTYxLDkuNjUxLDAuNDgxeiIgZmlsbD0iIzAwMDAwMCIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=)}</style>
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

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-9 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body" style="padding-bottom: 300px; width: 100%">

                            <canvas id="myChart">
                            <?php

#<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

 $conn = mysqli_connect("localhost", "root", "", "prep");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  $at1 = 0;
  $sql = "SELECT attendance FROM user WHERE usertype = 1 and attendance = 1";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
       $at1 ++;
      $name1 = "أولي";
   }
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$at2 = 0;
$sql = "SELECT attendance FROM user WHERE usertype = 2 and attendance = 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $at2 ++;
        $name2 = "ثانية";
    }
}

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            $at3 = 0;
                            $sql = "SELECT attendance FROM user WHERE usertype = 3 and attendance = 1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $at3 ++;
                                    $name1 = "ثالثة";
                                }
                            }
                            $dataPoints = array(
                                array("x"=> 10, "y"=> $at1 , "indexLabel"=> "أولي"),
                                array("x"=> 15, "y"=> $at2 , "indexLabel"=> "ثانية"),
                                array("x"=> 20, "y"=> $at3 , "indexLabel"=> "ثالثة")


                            );

                            ?>
                            </canvas>

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 mb-4">

                    <!--Card-->


                    <!--/.Card-->

                    <!--Card-->
                    <div class="card mb-4" >

                        <!--Card content-->
                        <div class="card-body" >

                            <!-- List group links -->
                            <div class="list-group list-group-flush" >

                                <a class="list-group-item list-group-item-action waves-effect">نسبة حضور  اولي
                                    <span class="badge badge-success badge-pill pull-right"><?php

                        if ($connect->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
}

                                $sql = "SELECT * From user WHERE usertype = 1";
                                $result = $connect->query($sql);
                                $counter = 0;
                                $attens = 0;

                                if ($result->num_rows > 0) {
// output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    $counter ++;
                                    if($row['attendance'] == 1)
                                    {
                                        $attens ++;
                                    }

                                }
                                }
                                if($counter != 0) {
                                    $final = $attens / $counter * 100;
                                    echo round($final) . "%";
                                }
                                else{
                                    echo "0%";
                                }
                                        ?>
                                        <i class="fa fa-arrow-up ml-1"></i>
                                    </span>
                                </a>

                                <a class="list-group-item list-group-item-action waves-effect">نسبة حضور  ثانية
                                    <span class="badge badge-warning badge-pill pull-right"><?php

                                        if ($connect->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        $sql = "SELECT * From user WHERE usertype = 2";
                                        $result = $connect->query($sql);
                                        $counter = 0;
                                        $attens = 0;

                                        if ($result->num_rows > 0) {
// output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $counter ++;
                                                if($row['attendance'] == 1)
                                                {
                                                    $attens ++;
                                                }

                                            }
                                        }
                                        if($counter != 0) {
                                            $final = $attens / $counter * 100;
                                            echo round($final) . "%";
                                        }
                                        else{
                                            echo "0%";
                                        }
                                        ?>

                                        <i class="fa fa-arrow-up ml-1"></i>
                                    </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">نسبة حضور  ثالثة
                                    <span class="badge badge-dark badge-pill pull-right">
                                        <?php

                                        if ($connect->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        $sql = "SELECT * From user WHERE usertype = 3";
                                        $result = $connect->query($sql);
                                        $counter = 0;
                                        $attens = 0;

                                        if ($result->num_rows > 0) {
// output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $counter ++;
                                                if($row['attendance'] == 1)
                                                {
                                                    $attens ++;
                                                }

                                            }
                                        }
                                        if($counter != 0) {
                                            $final = $attens / $counter * 100;
                                            echo round($final) . "%";
                                        }
                                        else{
                                            echo "0%";
                                        }
                                        ?>
                                        <i class="fa fa-arrow-up ml-1"></i>
                                    </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">نسبة حضور الخدام
                                    <span class="badge badge-info badge-pill pull-right"><?php

                                        if ($connect->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        $sql = "SELECT * From user WHERE usertype = 10";
                                        $result = $connect->query($sql);
                                        $counter = 0;
                                        $attens = 0;

                                        if ($result->num_rows > 0) {
// output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $counter ++;
                                                if($row['attendance'] == 1)
                                                {
                                                    $attens ++;
                                                }

                                            }
                                        }
                                        if($counter != 0) {
                                            $final = $attens / $counter * 100;
                                            echo round($final) . "%";
                                        }
                                        else{
                                            echo "0%";
                                        }
                                        ?>
                                        <i class="fa fa-arrow-up ml-1"></i>
                                    </span>
                                </a>

                                <a class="list-group-item list-group-item-action waves-effect">نسبة الحضور اليوم
                                    <span class="badge badge-light badge-pill pull-right"><?php

                                        if ($connect->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        $sql = "SELECT * From user WHERE usertype != 10";
                                        $result = $connect->query($sql);
                                        $counter = 0;
                                        $attens = 0;

                                        if ($result->num_rows > 0) {
// output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $counter ++;
                                                if($row['attendance'] == 1)
                                                {
                                                    $attens ++;
                                                }

                                            }
                                        }
                                        if($counter != 0) {
                                            $final = $attens / $counter * 100;
                                            echo round($final) . "%";
                                        }
                                        else{
                                            echo "0%";
                                        }
                                        ?>
                                        <i class="fa fa-arrow-up ml-1"></i>
                                    </span>

                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">نسبة الشمامسة
                                    <span class="badge badge-secondary badge-pill pull-right"><?php

                                        if ($connect->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        $sql = "SELECT * From user WHERE usertype != 10";
                                        $result = $connect->query($sql);
                                        $counter = 0;
                                        $shamas2 = 0;

                                        if ($result->num_rows > 0) {
// output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $counter ++;
                                                if($row['shamas'] == 1)
                                                {
                                                    $shamas2 ++;
                                                }

                                            }
                                        }
                                        if($counter != 0) {
                                            $final = $shamas2 / $counter * 100;
                                            echo round($final) . "%";
                                        }
                                        else{
                                            echo "0%";
                                        }
                                        ?>
                                        <i class="fa fa-arrow-up ml-1"></i>
                                    </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">نسبة الاعتراف
                                    <span class="badge badge-primary badge-pill pull-right"><?php

                                        if ($connect->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        $sql = "SELECT * From user WHERE usertype != 10";
                                        $result = $connect->query($sql);
                                        $counter = 0;
                                        $fath = 0;

                                        if ($result->num_rows > 0) {
// output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $counter ++;


                                            }
                                        }

                                        $sql = "SELECT * From user WHERE father = '' and usertype !=10";
                                        $result = $connect->query($sql);
                                        if ($result->num_rows > 0) {
// output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $fath ++;


                                            }
                                        }

                                        if($counter != 0) {
                                            $final = 100 - ($fath / $counter * 100);
                                            echo round($final) . "%";
                                        }
                                        else{
                                            echo "0%";
                                        }
                                        ?>
                                        <i class="fa fa-arrow-up ml-1"></i>
                                    </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect"> عدد المخدومين
                                    <span class="badge badge-danger pull-right"><?php

                                        if ($connect->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        $sql = "SELECT * From user WHERE usertype != 10";
                                        $result = $connect->query($sql);
                                        $counter = 0;


                                        if ($result->num_rows > 0) {
// output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $counter ++;


                                            }
                                        }


                                        echo $counter;
                                        ?>
                                        <i class="fa fa-arrow-up ml-1"></i>
                                    </span>
                                </a>

                            </div>
                            <!-- List group links -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
            <!--Grid row-->
            <div class="row wow fadeIn" >

                <!--Grid column-->
                <div class="col-md-6 mb-4" >

                    <!--Card-->
                    <div class="card" style="width: 1000px;">

                        <!--Card content-->
                        <div class="card-body" style="width: 1000px;">

                            <!-- Table  -->
                                <!-- Table body -->
                            <div class="row">
                                <div class="col-xl-3 col-sm-6 mb-3" style="font-size: 15px;">
                                    <div class="card text-white bg-primary o-hidden h-100">
                                        <div class="card-body">
                                            <div class="card-body-icon">
                                                <i class="fa-chess fa-2x"></i>
                                            </div>
                                            <div class=" fa-2x" style="text-align: center;"> عدد أولي اعدادي</div>
                                        </div>
                                        <a class="card-footer text-white clearfix small z-1" href="#">
                                            <span class="float-left" style="font-size: 15px; color: white;text-align: center"><?php
                                                $connect = mysqli_connect('localhost','root','','prep');
$redirect = new Uifunctions();

if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

$sql = "SELECT id From user WHERE usertype = 1 ";
$result = $connect->query($sql);
$counter = 0;

if ($result->num_rows > 0) {
// output data of each row
while ($row = $result->fetch_assoc()) {
    $counter ++;
}
}
echo $counter." "."ولد";
echo "<br>";
                                                $sql = "SELECT id From user WHERE shamas =1 and usertype = 1 ";
                                                $result = $connect->query($sql);
                                                $shamas = 0;

                                                if ($result->num_rows > 0) {
// output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        $shamas ++;
                                                    }
                                                }
                                                echo $shamas." "."شماس";
                                                echo "<br>";
                                                echo $counter - $shamas ." "."مش شماس";
?>
</span>
                                            <span class="float-right">
                    <i class="fa fa-rocket"></i>
                  </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 mb-3" style="font-size: 15px;">
                                    <div class="card text-white bg-warning o-hidden h-100">
                                        <div class="card-body">
                                            <div class="card-body-icon">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </div>
                                            <i class="fa-chess fa-2x"></i>
                                            <div class=" fa-2x" style="text-align: center;">عدد ثانية اعدادي</div>
                                        </div>
                                        <a class="card-footer text-white clearfix small z-1" href="#">
                                            <span class="float-left" style="font-size: 15px; color: white;text-align: center;"><?php
                                                $connect = mysqli_connect('localhost','root','','prep');
                                                $redirect = new Uifunctions();

                                                if ($connect->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);

                                                }
                                                $sql = "SELECT id From user WHERE usertype = 2 ";
                                                $result = $connect->query($sql);
                                                $counter = 0;

                                                if ($result->num_rows > 0) {
// output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        $counter ++;
                                                    }
                                                }
                                                echo $counter." "."ولد";
                                                echo "<br>";
                                                $sql = "SELECT id From user WHERE shamas =1 and usertype = 2 ";
                                                $result = $connect->query($sql);
                                                $shamas = 0;

                                                if ($result->num_rows > 0) {
// output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        $shamas ++;
                                                    }
                                                }
                                                echo $shamas." "."شماس";
                                                echo "<br>";
                                                echo $counter - $shamas ." "."مش شماس";
                                                ?></span>
                                            <span class="float-right">
                    <i class="fa fa-rocket"></i>
                  </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 mb-3" style="font-size: 15px;">
                                    <div class="card text-white bg-success o-hidden h-100">
                                        <div class="card-body">
                                            <div class="card-body-icon">
                                                <i class="fa-chess fa-2x"></i>
                                            </div>
                                            <div class=" fa-2x" style="text-align: center;">عدد ثالثة اعدادي</div>
                                        </div>
                                        <a class="card-footer text-white clearfix small z-1" href="#">
                                            <span class="float-left" style="font-size: 15px; color: white;text-align: center;"><?php
                                                $connect = mysqli_connect('localhost','root','','prep');
                                                $redirect = new Uifunctions();

                                                if ($connect->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);

                                                }

                                                $sql = "SELECT id From user WHERE usertype = 3 ";
                                                $result = $connect->query($sql);
                                                $counter = 0;

                                                if ($result->num_rows > 0) {
// output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        $counter ++;
                                                    }
                                                }
                                                echo $counter." "."ولد";
                                                echo "<br>";
                                                $sql = "SELECT id From user WHERE shamas =1 and usertype = 3 ";
                                                $result = $connect->query($sql);
                                                $shamas = 0;

                                                if ($result->num_rows > 0) {
// output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        $shamas ++;
                                                    }
                                                }
                                                echo $shamas." "."شماس";
                                                echo "<br>";
                                                echo $counter - $shamas ." "."مش شماس";
                                                ?></span>
                                            <span class="float-right">
                    <i class="fa fa-rocket"></i>
                  </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 mb-3" style="font-size: 15px;">
                                    <div class="card text-white bg-danger o-hidden h-100">
                                        <div class="card-body">
                                            <div class="card-body-icon">
                                                <i class="fa fa-address-card fa-2x" style="text-align: center;"></i>
                                            </div>
                                            <div class="fa-2x" style="text-align: center">عدد الخدام</div>
                                        </div>
                                        <a class="card-footer text-white clearfix small z-1" href="#">
                                            <span class="float-left" style="font-size: 15px; color: white;text-align: center;"><?php
                                                $connect = mysqli_connect('localhost','root','','prep');
                                                $redirect = new Uifunctions();

                                                if ($connect->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);

                                                }

                                                $sql = "SELECT id From user WHERE usertype = 10 ";
                                                $result = $connect->query($sql);
                                                $counter = 0;

                                                if ($result->num_rows > 0) {
// output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        $counter ++;
                                                    }
                                                }
                                                echo $counter;
                                                ?>
                                                    </span>
                                            <span class="float-right">
                    <i class="fa fa-rocket"></i>
                  </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Table  -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->
            </div>
                <!--Grid column-->

        <div class="row wow fadeIn" >

            <!--Grid column-->
            <div class="col-md-3 mb-4" >

                <!--Card-->
                <div class="card" style="width: 1000px;">

                    <!--Card content-->
                    <div class="card-body" style="width: 1000px;">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12" style="margin-right: 80px;">
                <div class="panel panel-primary text-center no-boder bg-color-green" >
                    <div class="panel-left pull-left white">
                        <i class="fa fa-users fa-5x"></i>

                    </div>
                    <div class="panel-right pull-right">
                        <h3><?php
                            $connect = mysqli_connect('localhost','root','','prep');
                            $redirect = new Uifunctions();

                            if ($connect->connect_error) {
                                die("Connection failed: " . $conn->connect_error);

                            }

                            $sql = "SELECT id From user WHERE role =1; ";
                            $result = $connect->query($sql);
                            $counter = 0;

                            if ($result->num_rows > 0) {
// output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    $counter ++;
                                }
                            }
                            echo $counter;
                            ?></h3>
                        <strong> خدام فصل أولي</strong>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12" style="margin-right: 80px;">
                <div class="panel panel-primary text-center no-boder bg-color-blue">
                    <div class="panel-left pull-left white">
                        <i class="fa fa-address-card fa-5x"></i>
                    </div>

                    <div class="panel-right pull-right">
                        <h3> <?php
                            $connect = mysqli_connect('localhost','root','','prep');
                            $redirect = new Uifunctions();

                            if ($connect->connect_error) {
                                die("Connection failed: " . $conn->connect_error);

                            }

                            $sql = "SELECT id From user WHERE role =2; ";
                            $result = $connect->query($sql);
                            $counter = 0;

                            if ($result->num_rows > 0) {
// output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    $counter ++;
                                }
                            }
                            echo $counter;
                            ?></h3>
                        <strong> خدام فصل ثانية</strong>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-red">
                    <div class="panel-left pull-left white">
                        <i class="fa fa-address-book fa-5x"></i>

                    </div>
                    <div class="panel-right pull-right">
                        <h3><?php
                            $connect = mysqli_connect('localhost','root','','prep');
                            $redirect = new Uifunctions();

                            if ($connect->connect_error) {
                                die("Connection failed: " . $conn->connect_error);

                            }

                            $sql = "SELECT id From user WHERE role =3; ";
                            $result = $connect->query($sql);
                            $counter = 0;

                            if ($result->num_rows > 0) {
// output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    $counter ++;
                                }
                            }
                            echo $counter;
                            ?></h3>
                        <strong> خدام فصل ثالثة </strong>

                    </div>
                </div>
            </div>

        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<div class="row wow fadeIn" style="margin-left: 300px;" >

    <!--Grid column-->
    <div class="col-md-9 mb-4" >

        <!--Card-->
        <div class="card" style="width: 1000px;">

            <!--Card content-->
            <div class="card-body" style="width: 1000px;">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12" style="margin-right: 80px;">
                        <div class="panel panel-primary text-center no-boder bg-color-green" >
                            <div class="panel-left pull-left white">


                            </div>
                            <div class="panel-right pull-right">
                                <h3><?php
                                    $connect = mysqli_connect('localhost','root','','prep');
                                    $redirect = new Uifunctions();

                                    if ($connect->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);

                                    }

                                    $sql = "SELECT name From user WHERE role =1; ";
                                    $result = $connect->query($sql);


                                    if ($result->num_rows > 0) {
// output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo $row['name'];
                                            echo "<br><hr>";
                                        }
                                    }
                                    else{
                                        echo "Not Registered";
                                    }

                                    ?></h3>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12" style="margin-right: 80px;">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-left pull-left white">

                            </div>

                            <div class="panel-right pull-right">
                                <h3><?php
                                    $connect = mysqli_connect('localhost','root','','prep');
                                    $redirect = new Uifunctions();

                                    if ($connect->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);

                                    }

                                    $sql = "SELECT name From user WHERE role =2; ";
                                    $result = $connect->query($sql);


                                    if ($result->num_rows > 0) {
// output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo $row['name'];
                                            echo "<br><hr>";
                                        }
                                    }
                                    else{
                                        echo "Not Registered";
                                    }

                                    ?></h3>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-left pull-left white">


                            </div>
                            <div class="panel-right pull-right">
                                <h3><?php
                                    $connect = mysqli_connect('localhost','root','','prep');
                                    $redirect = new Uifunctions();

                                    if ($connect->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);

                                    }

                                    $sql = "SELECT name From user WHERE role =3; ";
                                    $result = $connect->query($sql);


                                    if ($result->num_rows > 0) {
// output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo $row['name'];
                                            echo "<br><hr>";
                                        }
                                    }else{
                                        echo "Not Registered";
                                    }

                                    ?></h3>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</main>

<div class="row wow fadeIn" style="margin-left: 300px;" >

    <!--Grid column-->
    <div class="col-md-9 mb-4" >

        <!--Card-->
        <div class="card" style="width: 1000px;">

            <!--Card content-->
            <div class="card-body" style="width: 1000px;">
                <div class="row">
                    <div  style="margin-right: 80px;">
                        <div class="panel panel-primary text-center no-boder bg-color-green" >
                            <div class="panel-left pull-left white">

                            </div>

                            </div>
                            <div style="text-align: center;display: inline-block;padding-bottom: 20px;padding-top: 20px;">
                                <h3><?php
                                    $connect = mysqli_connect('localhost','root','','prep');
                                    $redirect = new Uifunctions();

                                    if ($connect->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);

                                    }

                                    $sql = "SELECT * From events ; ";
                                    $result = $connect->query($sql);


                                    if ($result->num_rows > 0) {
// output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                            echo "<i class=\"fa fa-calendar fa-3x\" style=\"margin-left: -715px;\"></i>";
                                            echo "<p style='margin-left: 100px;margin-top: -70px;'><span style='color: #2c0419'>"."\"".$row['event_name']."\""."</span>";
                                            echo " is going to be held on ";
                                            echo "<span style='color: #1a237e'>".$row['date']."</span>";
                                            echo " the Servant responsible for th event is ";
                                            echo "<span style='color: #2e3951'>".$row['responsible']."</span>";
                                            echo " with budget ".$row['budget']." "."<i class=\"far fa-money-bill-alt\"></i>"."</p>";
                                            echo "<br><hr>";
                                        }
                                    }
                                    else{
                                        echo "<i class=\"fa fa-calendar fa-3x\" style=\"margin-left: -500px;margin-top: -350px;\"></i>
<br>";
                                        echo "<p style='margin-left: 150px;margin-top: -70px;'>There is no upcoming Events ! stay tuned :D !</p>";
                                    }

                                    ?></h3>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-left pull-left white">


                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</main>

    <!--Main layout-->
    </main>
    <!--Footer-->

    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization



        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                exportEnabled: true,
                theme: "light1", // "light1", "light2", "dark1", "dark2"
                title:{
                    text: "احصائيات"
                },
                data: [{
                    type: "pie", //change type to bar, line, area, pie, etc
                    //indexLabel: "{y}", //Shows y value on all Data Points
                    indexLabelFontColor: "#5A5757",
                    indexLabelPlacement: "outside",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
    </script>
            </head>
            <body>
            <br><br><br><br><br><br>
            <div id="chartContainer" style=" width: 50% ; margin-top: -1850px; margin-left: 350px; height: 100%;"></div>


            <script type="text/javascript" href="bootstrap.min.js"></script>
            <script type="text/javascript" src="canvasjs-2.1.1/canvasjs.min.js"></script>


    <!-- Charts -->

</body>

</html>