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


<form name="search_form" method="POST" action="display_data.php">
Search:
<input type="text" name="search_box" value="" />
<input type="submit" name="search" value="Search the table...">
</form>

<table width="70%" cellpadding="5" cellspace="5">
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Name</strong></td>
    </tr>
    <?php while ($row = mysql_fetch_array($query)) { ?> 
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['level']; ?></td>
    </tr>
    <?php } ?>

</table>