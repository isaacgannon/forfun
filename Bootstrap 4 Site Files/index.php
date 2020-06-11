<?php 
$servername = "loveyourcaragain";
$username = "loveyourcar";
$password = "Test1234";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
	# code...
}

echo "Connected succesfully"

/* SQL query to get results from database */
$result = mysqli_query($conn, "SELECT * FROM love_your_car_again");


$data = array();
while ($row = mysqli_fetch_assoc($result))
{
	$data[] = $row;

}

echo json_encode($data);

$sql = "SELECT id, car_brand, car_make, car_size FROM love_your_car_again";

$result = $conn->query($sql);

if ()

?>

//connect to database
	//$conn = mysqli_connect('localhost', 'loveyourcar', 'Test1234', 'loveyourcaragain');

	//check connection

	//if(!$conn) {
	//	echo "connection error: " . mysqli_connect_error();
		# code...
	//}

