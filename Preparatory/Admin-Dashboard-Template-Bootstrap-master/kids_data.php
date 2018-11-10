<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script type="text/javascript" href="bootstrap.min.js"></script>
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
                    th {
                        padding-top: 12px;
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



            <header style="font-size: 17px;position: fixed">


            <?php
            include 'notification.php';
            include 'nav.php';
            ?>
            </header>

            <body class="grey lighten-3" style="overflow-y:scroll;height:600px;display:block;">
            <table style="width:80% ; margin-top: 100px;margin-left: 250px;margin-right: -50px;overflow-y:scroll;height:600px;display:block;" class="table table-striped" border="1">
  <tr>



      <th style="text-align: center; font-size: 20px; color: #2c0419">الشموسية</th>
      <th style="text-align: center; font-size: 20px; color: #2c0419">المدرسة</th>
      <th style="text-align: center; font-size: 20px; color: #2c0419">أب الاعتراف</th>
      <th style="text-align: center; font-size: 20px; color: #2c0419">السنة</th>
      <th style="text-align: center; font-size: 20px; color: #2c0419">رقم الشقة</th>
      <th style="text-align: center; font-size: 20px; color: #2c0419">الدور</th>
      <th style="text-align: center; font-size: 20px; color: #2c0419">اسم الشارع</th>
      <th style="text-align: center; font-size: 20px; color: #2c0419">رقم الشارع</th>
      <th style="text-align: center; font-size: 20px; color: #2c0419">موبايل الأب</th>
      <th style="text-align: center; font-size: 20px; color: #2c0419">موبايل الأم</th>
      <th style="text-align: center; font-size: 20px; color: #2c0419">الموبايل</th>
      <th style="text-align: center; font-size: 20px; color: #2c0419">التليفون</th>
      <th style="text-align: center; font-size: 20px; color: #2c0419">الأسم</th>
      <th style="text-align: center; font-size: 20px; color: #2c0419">ID</th>


  </tr>
<?php
/**
 * Created by PhpStorm.
 * User: Marc_Essam
 * Date: 9/10/18
 * Time: 4:25 AM
 */


include 'Uifunctions.php';
$connect = mysqli_connect('localhost','root','','prep');
$redirect = new Uifunctions();

if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

$sql = "SELECT * From user WHERE usertype != 10 ORDER BY usertype";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while ($row = $result->fetch_assoc()) {
?>


               <tr>

                   <td style="text-align: center; font-size: 15px;"><?php echo $row['shamas'] ?></td>
                   <td style="text-align: center; font-size: 15px;"><?php echo $row['school'] ?></td>
                   <td style="text-align: center; font-size: 15px;">أ/<?php echo $row['father'] ?></td>
                   <td style="text-align: center; font-size: 15px;"><?php echo $row['usertype'] ?></td>
                   <td style="text-align: center; font-size: 15px;"><?php echo $row['flat_no'] ?></td>
                   <td style="text-align: center; font-size: 15px;"><?php echo $row['flat_level'] ?></td>
                   <td style="text-align: center; font-size: 15px;"><?php echo $row['st_name'] ?></td>
                   <td style="text-align: center; font-size: 15px;"><?php echo $row['st_no'] ?></td>
                   <td style="text-align: center; font-size: 15px;"><?php echo "0".$row['fmob'] ?></td>
                   <td style="text-align: center; font-size: 15px;"><?php echo "0".$row['mmob'] ?></td>
                   <td style="text-align: center; font-size: 15px;"><?php echo "0".$row['mobile'] ?></td>
                   <td style="text-align: center; font-size: 15px;"><?php echo $row['telephone'] ?></td>
                   <td style="text-align: center; font-size: 15px;"><?php echo $row['name'] ?></td>
                   <td style="text-align: center; font-size: 15px;"><?php echo $row['id'] ?></td>
                </tr>








<?php
}
}

?>


            </table>

            </body>
            </html>