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
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            width: 400px;
            margin-left: 100px;
        }
        .exam {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            width: 400px;
            margin-left: 350px;
        }

        .dropbtn:hover, .dropbtn:focus {
            background-color: #3e8e41;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            margin-left: 310px;
            text-align: center;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #f1f1f1}

        .show {display:block;}
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
    <input type="text" name="id" placeholder="Enter Your ID" style="margin-top: 200px;width: 70%;" class="align-baseline">

    <input type="submit" name="alhan" value="الامتحان"  class="exam">
    <div class="dropdown">
        <input type="button" id="myBtn" class="dropbtn"  value="المناسبات"></input>

        <div id="myDropdown" class="dropdown-content">
            <input type="submit" name="nahda_toneya" class="btn-blue" value="النهضة بالتونية" style="width: 200px;height: 50px;"> </input>
            <input type="submit" name="nahda_without" class="btn-danger" value="النهضة بدون التونية" style="width: 200px;height: 50px;"> </input>
            <input type="submit" name="kiahk_toneya" class="btn-blue" value=" سهرة كيهك بالتونية" style="width: 200px;height: 50px;"></input>
            <input type="submit" name="kiahk_without" class="btn-danger" value=" سهرة كيهك بدون التونية" style="width: 200px;height: 50px;"></input>
            <input type="submit" name="eid_toneya" class="btn-blue" value=" قداس العيد بالتونية" style="width: 200px;height: 50px;"></input>
            <input type="submit" name="eid_without" class="btn-danger" value=" قداس العيد بدون التونية" style="width: 200px;height: 50px;"></input>




        </div>
    </div>
    <select style="margin-left: 300px; width: 70%;padding: 12px 20px;margin-top: 100px;" name="name">

        <?php
        $sql = "SELECT name FROM user WHERE usertype != 10 ";
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
    <input type="number"  style="margin-top:30px; " name = "bonus"></input>
    <input type="submit"  name="bonus_added" class="btn-green" style="width:120px;height: 40px;margin-top: 30px;margin-left: 500px;" value="Add Bonus">
    <input type="submit"  name="attens" class="btn-green" style="width:140px;height: 40px;margin-top: 30px;margin-left: 500px;" value="Alhan Attendance">
    </input>
</form>
</body>
    <script>
        // Get the button, and when the user clicks on it, execute myFunction
        document.getElementById("myBtn").onclick = function() {myFunction()};

        /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
    </script>
