<?php 
// Connect to database.
$link = mysqli_connect('54.175.23.88', 'root', 'secretpassword', 'pictures') or die('Error connecting to MySQL server.'); 

// Get images.
$image_result = mysqli_query($link, 'SELECT imageurl, userid FROM images WHERE private = 0') or die('Error fetching images.');  

//Display images with usernames.
while ($row = mysqli_fetch_array($image_result))    
{    
	$user_result = mysqli_query($link, "SELECT username FROM users WHERE userid = ".$row['userid']) or die('Error fetching users.');
	$username = mysqli_fetch_array($user_result)['username'];
	include 'images.html.php';
}
?>