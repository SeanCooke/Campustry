<?php
	require_once('/var/www/html/db_conn.php');
    $key=$_GET['key'];
    $array = array();
    $query=mysql_query("SELECT *
    					  FROM Users
    				     WHERE CONCAT(FirstName, ' ', LastName) LIKE '$key%' OR LastName LIKE '$key%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['FirstName'].' '.$row['LastName'];
    }
    echo json_encode($array);
?>