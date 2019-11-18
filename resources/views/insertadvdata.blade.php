<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("127.0.0.1", "ingatlan", "ingatlan", "table.advertisement");
 
// Check connection
if($link === false){
    die("Hiba!" . mysqli_connect_error());
}
 
// Escape user inputs for security
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$county = mysqli_real_escape_string($link, $_REQUEST['county']);
$rooms = mysqli_real_escape_string($link, $_REQUEST['rooms']);
$price = mysqli_real_escape_string($link, $_REQUEST['price']);
$id = mysqli_real_escape_string($link, Str::random(12));
$user_id = mysqli_real_escape_string($link, Str::random(10));

 
// Attempt insert query execution
$sql = "INSERT INTO persons (city, county, rooms, price, id, user_id) VALUES ('$city', '$county', '$rooms', '$price', '$id', '$user_id'";
if(mysqli_query($link, $sql)){
    echo "Sikeres hirdetésfelvétel";
} else{
    echo "Nem sikerült végrahajtani. Kérem próbálkozzon újra! $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>