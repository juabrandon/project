<?php
/* Attempt MySQL server connection.*/
$link = mysqli_connect("localhost", "root", "", "guestlog");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_GET['firstname']);
$last_name = mysqli_real_escape_string($link, $_GET['lastname']);
$city_state = mysqli_real_escape_string($link, $_GET['citystate']);
$short_message = mysqli_real_escape_string($link, $_GET['shortmessage']);
 
// attempt insert query execution
$sql = "INSERT INTO guestlist (first_name, last_name, city_state, short_message, date_visited) VALUES ('$first_name', '$last_name', '$city_state', '$short_message', now())";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
