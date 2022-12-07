<?php
echo "Hello there, this is a PHP Apache container<br />";
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else {
	echo "Connected to MySQL server successfully!";
}

// database name
$myDatabase = 'MY_DATABASE';
// check the mysql connection status

$conn = new mysqli($host, $user, $pass, $myDatabase);

// select query
$sql = 'SELECT * FROM users';
$users = [];
if ($result = $conn->query($sql)) {
	while ($data = $result->fetch_object()) {
		$users[] = $data;
	}
}

foreach ($users as $user) {
	echo "<br>";
	echo $user->username . " " . $user->password;
	echo "<br>";
}
phpinfo();