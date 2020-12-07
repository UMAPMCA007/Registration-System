<?php

$dbhost  = "localhost";
$dbuser  = "root";
$dbpass  = "";
$db      = "loginsystem";


$conn=mysqli_connect($dbhost, $dbuser, $dbpass,$db );

if($conn){
    $query1 = "create table if not exists logindata  (
                  id int(11) PRIMARY KEY auto_increment,
                  name varchar(255) not null,
                  email varchar(255) not null,
                  password varchar(255) not null
                  ) engine=innodb ";
              mysqli_query($conn,$query1);

}else{
    echo "Database failed";
}





?>