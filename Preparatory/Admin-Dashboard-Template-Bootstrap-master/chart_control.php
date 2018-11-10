
<?php
#<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

include 'Uifunctions.php';
$connect = mysqli_connect('localhost','root','','prep');
$redirect = new Uifunctions();

// Check connection
if(isset($_POST['edit'])) {
    $name = $_POST['choice'];
    echo "<p style='text-align: center;'>".$name."</p>";
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    $week_one = 0;
    $week_two = 0;
    $week_three = 0;
    $week_four = 0;

    $counter = 0;
    $sql = "SELECT * FROM user WHERE name ='$name'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $week_one = $row['week_one'];
            $week_two = $row['week_two'];
            $week_three = $row['week_three'];
            $week_four = $row['week_four'];


        }
    }
}
$dataPoints = array(
    array("x"=> 10, "y"=> $week_one , "indexLabel"=> 'week 1'),
    array("x"=> 20, "y"=> $week_two , "indexLabel"=> 'week 2'),
    array("x"=> 30, "y"=> $week_three, "indexLabel"=> 'week 3'),
    array("x"=> 40, "y"=> $week_four , "indexLabel"=> 'week 4')

);




?>

<!DOCTYPE HTML>
<html>
<head>

    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                exportEnabled: true,
                theme: "light1", // "light1", "light2", "dark1", "dark2"
                title:{
                    text: "الحضور الشهري"
                },
                data: [{
                    type: "line", //change type to bar, line, area, pie, etc
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

<div id="chartContainer" style="height: 100%; width: 100%;"></div>


<script type="text/javascript" href="bootstrap.min.js"></script>
<script type="text/javascript" src="canvasjs-2.1.1/canvasjs.min.js"></script>
</body>
</html>
