<html>
<title>View Guest Log Book</title>
<h1 align="center"> Guest Log Book</h1>
        
</html>

<?php
/* Attempt MySQL server connection.*/
$link = mysqli_connect("localhost", "root", "", "guestlog");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM guestlist";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>First Name &nbsp; &nbsp; </th>";
                echo "<th>Last Name    </th>";
                echo "<th>City, State    </th>";
                echo "<th>Date Visited    </th>";
                echo "<th>&nbsp; &nbsp; &nbsp; &nbsp; Comments</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['first_name'] . "    </td>";
                echo "<td>" . $row['last_name'] . "   &nbsp; &nbsp; </td>";
                echo "<td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;" . $row['city_state'] . "   &nbsp; &nbsp; &nbsp; &nbsp; </td>";
                echo "<td>" . $row['date_visited'] . "    </td>";
                echo "<td> &nbsp; &nbsp; &nbsp; &nbsp; " . $row['short_message'] . "    </td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<a href=\"index.html\">Add Guest</a>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>
<html>
    <style>
        body {background-image: url("/photos/trooppeek.jpg"); 
        /* trooppeek.jpg image from https://images.app.goo.gl/Uw359GSjykVnbWav9 */
        background-repeat: no-repeat;
        background-position: bottom right;
}
</style>
    <h2 align="right"> #LOOKINGFORJEDI </h2>
</html>