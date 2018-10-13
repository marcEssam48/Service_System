<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script type="text/javascript" href="bootstrap.min.js"></script>
<?php
/**
 * Created by PhpStorm.
 * User: Marc_Essam
 * Date: 9/10/18
 * Time: 2:30 AM
 */

include 'Uifunctions.php';
$connect = mysqli_connect('localhost','root','','prep');
$redirect = new Uifunctions();

if(isset($_POST['submit'])) {
    $name = $_POST['name'];

    if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * From user WHERE name = '$name'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            ?>

            <!DOCTYPE html>
            <html lang="ar">
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
                <link rel="shortcut icon" href="img/logo.jpg"/>
                <title>فتيان المذبح</title>
                <!-- Font Awesome -->
                <link rel="stylesheet"
                      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <!-- Bootstrap core CSS -->
                <link href="css/bootstrap.min.css" rel="stylesheet">
                <!-- Material Design Bootstrap -->
                <link href="css/mdb.min.css" rel="stylesheet">
                <!-- Your custom styles (optional) -->
                <link href="css/style.min.css" rel="stylesheet">
            </head>


            <body class="grey lighten-3">
            <header>

                <!-- Navbar -->
               <?php
               include 'nav.php';
               ?>
                <!-- Sidebar -->

            </header>

            <p>Padded text fields:</p>

            <form action="retrieve.php" method="post">
                <label for="lname" style="margin-left: 1150px;margin-top: 50px;">ID</label>
                <input type="text" id="no" name="id" value="<?php echo $row['id']; ?>">
                <label for="lname" style="margin-left: 1150px;margin-top: 50px;">الأسم</label>
                <input type="text" id="ha" name="name" value="<?php echo $row['name']; ?>">
                <label for="lname" style="margin-left: 1150px;margin-top: 50px;">رقم الشارع</label>
                <input type="text" id="lname" name="st_no" value="<?php echo $row['st_no']; ?>">
                <label for="lname" style="margin-left: 1150px;margin-top: 50px;">اسم الشارع</label>
                <input type="text" id="lname" name="st_name" value="<?php echo $row['st_name']; ?>">
                <label for="lname" style="margin-left: 1150px;margin-top: 50px;">الدور</label>
                <input type="text" id="lname" name="flat_level" value="<?php echo $row['flat_level']; ?>">
                <label for="lname" style="margin-left: 1150px;margin-top: 50px;">رقم الشقة</label>
                <input type="text" id="lname" name="flat_no" value="<?php echo $row['flat_no']; ?>">
                <label for="lname" style="margin-left: 1150px;margin-top: 50px;">رقم التليفون</label>
                <input type="number" id="tele" name="tel" value="<?php echo $row['telephone']; ?>">
                <label for="lname" style="margin-left: 1150px;margin-top: 50px;">رقم الموبايل</label>
                <input type="number" id="mob" name="mobile" value="<?php echo $row['mobile']; ?>">
                <label for="lname" style="margin-left: 1150px;margin-top: 50px;">رقم موبايل الأب</label>
                <input type="number" id="father" name="fmob" value="<?php echo $row['fmob']; ?>">
                <label for="lname" style="margin-left: 1150px;margin-top: 50px;">رقم موبايل الأم</label>
                <input type="number" id="Mother" name="Mmob" value="<?php echo $row['mmob']; ?>">
                <label for="lname" style="margin-left: 1150px;margin-top: 50px;">اب الاعتراف</label>
                <input type="text" id="conf" name="confess" value="<?php echo $row['father']; ?>">
                <label for="lname" style="margin-left: 1150px;margin-top: 50px;">خادم المتابعة</label>
                <input type="text" id="conf" name="servantm" value="<?php echo $row['servantm']; ?>">
                <label for="lname" style="margin-left: 1150px;margin-top: 50px;">نوع المستخدم</label>


                <select style="margin-left: 300px; width: 70%;padding: 12px 20px; " name="choice"
                        value="<?php echo $row['usertype']; ?>">
                    <option value="1">اولي اعدادي</option>
                    <option value="2">ثانية اعدادي</option>
                    <option value="3">ثالثة اعدادي</option>
                    <option value="10">خادم</option>

                </select>
                <br><br><br>

                <label for="lname" style="margin-left: 1150px;margin-top: 50px;">الشموسية</label>
                <input type="number" id="chosen" name="shamas" placeholder="Enter 1 for yes 0 for no" value="<?php echo $row['shamas']; ?>">
                <label for="lname" style="margin-left: 1150px;margin-top: 50px;">المدرسة</label>
                <br><br>
                <input type="text" id="school" name="school" placeholder="Enter your School" value="<?php echo $row['school']; ?>" style="margin-left: 300px;">



                <input type="submit" name="edit" class="btn btn-success" value=" Submit"
                       style="margin-left: 300px;margin-top: 50px;">


            </form>

            </body>
            </html>


            }

            <?php
        }


    }
    else{
        $msg = "<div class=' alert alert-danger'>This name is not registered </div>";
        $redirect->redirectHome($msg,'index.php');
        echo "<br>";
    }
}
        ?>