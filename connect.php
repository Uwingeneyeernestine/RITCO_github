<?php 
 $conn=
 mysqli_connect("localhost","root","","ritcox");

 if(isset($_POST["names"])&&isset($_POST["tool"])&& isset($_POST["password"])){

    $names = $_POST["names"];
    $tool = $_POST["tool"];
    $password = $_POST["password"];

    $mysql="INSERT INTO signup(names,tool,pass)VALUES(' $names','$tool','$password')";

    $result = mysqli_query( $conn,  $mysql);

    if(!$result->$connect_error){
       header(header:"location:./service.php");
    }else
      {
        echo 'connection failled'.$connect_error;
      }
 }
?>