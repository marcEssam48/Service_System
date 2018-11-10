<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/26/18
 * Time: 5:47 PM
 */
include 'Uifunctions.php';
$connect = mysqli_connect('localhost','root','','prep');
$redirect = new Uifunctions();

if(isset($_POST['eftekad_motabaa']))
{
    header('Location: eftekad.php');
}
if(isset($_POST['eftekad_manateq']))
{
    header('Location: eftekad_manateq.php');
}