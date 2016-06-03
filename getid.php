<?php
/**
 * Template Name: Update
 *
 * Displays the Business Template of the theme.
 *
 * @package thbusiness
 */

?>
<?php
include ("connection.php");
	
$result = mysqli_query($conn,"SELECT MAX(id)+1 FROM data");

    $row = mysqli_fetch_row($result);
    echo $row[0];


?>