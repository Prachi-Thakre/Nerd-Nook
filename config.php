<?php
define('DBSERVER' , 'localhost:3308');
define('DBSERNAME' , 'root');
define('DBPASSWORD', 'rinu');
define('DBNAME', 'nerdnook');

/*connect to mySql database */

$db = mysqli_connect(DBSERVER, DBSERNAME, DBPASSWORD, DBNAME);

//chect db connection
if($db === false){
   die("Error: connection error. " . mysqli_connect_error());
   }
   
   ?>