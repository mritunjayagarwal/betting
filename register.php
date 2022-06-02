<?php
$host = "localhost";
$databasebUser= "root";
$databasePwd="";
$dataBaseName= "data";
$connect=mysqli_connect($host,$databasebUser,$databasePwd,$dataBaseName);
$email = $_GET['email'];
if($connect==true){
     echo "connected";
}else{
    echo" not connected";
};

$myQuery = "INSERT INTO register VALUES('$email')";
$runQuery= mysqli_query($connect, $myQuery);

// print_r($runQuery);

// while($myData= mysqli_fetch_array($runQuery)){
//   echo $myData["$fname"]." ".$myData["$lname"]." ".$myData["$email"];
//}; 


?>