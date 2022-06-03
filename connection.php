<?php
$host = "localhost";
$databasebUser= "root";
$databasePwd="";
$dataBaseName= "data";
$connect=mysqli_connect($host,$databasebUser,$databasePwd,$dataBaseName);
$name = $_GET['name'];
$age = $_GET['contact'];
$country = $_GET['email'];
if($connect==true){
    echo "connected";
}else{
   echo" not connected";
};
$myQuery = "INSERT INTO tb_data VALUES('$name', '$age', '$country')";
$runQuery= mysqli_query($connect, $myQuery);

?>