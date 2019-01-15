 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "IOT";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo "0 results";
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT  id,temperature,humidity,speed,timing  FROM Grass_cutter";
$result = mysqli_query($conn, $sql);
if($result){
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo   "id " . $row["id"]. " " ." temperature " . $row["temperature"]. " " ." -humidity " .$row["humidity"]. " " ." -speed " .$row["speed"]. " " ." -timing " .$row["timing"] ."<br><br>"
?>
<?php
    }
} else {
    echo "0 results";
}
}

mysqli_close($conn);
?> 
