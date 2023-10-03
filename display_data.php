<?php

//Include the connection file
include "connection.php";

$sql = "SELECT * FROM members" //memebers this is the name of database in MySQL

if (isset($_POST['search'])) { //if 'search' (i.e. submited (i.e. = id est (latin) = d.h. = das hesit)) is true  
    $search_term = mysql_real_escape_string($_POST['search_box']); //puted input's value
    $sql .= "WHERE name = '{$search_term}'";
    $sql .= "OR level = '{$search_term}'";
}

$query = mysql_query($sql) or die(mysql_error());
?>