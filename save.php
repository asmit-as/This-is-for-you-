<?php
$server = "localhost";
$username ="root";
$password ="";
$dbname = "asmit";

$con = mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
    echo "no";
}
else
{
    echo "done";
}
$kyte = $_POST['data']
$cb = $_POST['cb']
$sql = "INSERT INTO `tuziicha`(`kyte`, `cb`) VALUES ('[$kyte]','[cb]')";
$result = mysql_query($con,$sql);
if($result)
{
    echo "ok";
}
else{
    echo "fill"
}

?>