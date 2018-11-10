<?php
/**
 * Created by PhpStorm.
 * User: Marc_Essam
 * Date: 9/13/18
 * Time: 8:12 AM
 */


$connect = mysqli_connect('localhost','root','','prep');
$sql = "SELECT * From user WHERE usertype = 1 and attendance = 0 ORDER BY usertype";
$result = $connect->query($sql);

function ExportCSVFile($records)
{
    // create a file pointer connected to the output stream
    $fh = fopen('php://output', 'w');
    $heading = false;
    if (!empty($records))
        foreach ($records as $row) {
            if (!$heading) {
                // output the column headings
                fputcsv($fh, array_keys($row));
                $heading = true;
            }
            // loop over the rows, outputting them
            fputcsv($fh, array_values($row));

        }
    fclose($fh);
}

function ExportFile($records)
{
    $heading = false;
    if (!empty($records))
        foreach ($records as $row) {
            if (!$heading) {
                // display field/column names as a first row
                echo implode("\t", array_keys($row)) . "\n";
                $heading = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    exit;
}


if ($result->num_rows > 0) {
// output data of each row
    while ($row = $result->fetch_assoc()) {
        $data = array(
            array('Name' => $row['name'], 'Address' => $row['address'], 'Telephone' => $row['telephone'], 'Mobile' => $row['mobile'], 'Father\'s Mobile' => $row['fmob'], 'Mother\'s Mobile' => $row['mmob'], 'Shamas' => $row['shamas'])
        );

        if (isset($_POST["ExportType"])) {
            switch ($_POST["ExportType"]) {
                case "export-to-excel" :
                    // Submission from
                    $filename = $_POST["ExportType"] . ".xls";
                    header("Content-Type: application/vnd.ms-excel");
                    header("Content-Disposition: attachment; filename=\"$filename\"");
                    ExportFile($data);
                    //$_POST["ExportType"] = '';
                    exit();
                case "export-to-csv" :
                    // Submission from
                    $filename = $_POST["ExportType"] . ".csv";
                    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
                    header("Content-type: text/csv");
                    header("Content-Disposition: attachment; filename=\"$filename\"");
                    header("Expires: 0");
                    ExportCSVFile($data);
                    //$_POST["ExportType"] = '';
                    exit();
                default :
                    die("Unknown action : " . $_POST["action"]);
                    break;
            }
        }

    }
}
?>