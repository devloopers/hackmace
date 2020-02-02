<?php
    $connection = new mysqli('localhost','root','','hack');
    if($connection->connect_error)
{
  die("connection failed:". $connection->connect_error);
}
else {
 echo("successfull");
}
?>