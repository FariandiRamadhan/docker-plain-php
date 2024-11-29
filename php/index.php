<?php
// phpinfo();
$conn = mysqli_connect("db", "root", "root", "db_docker", "3306") or die("cannot connect to the database!");

$query = mysqli_query($conn, "select * from belajar_docker_php");

$results = [];
while($result = mysqli_fetch_assoc($query)){
    array_push($results, $result);
}
echo json_encode($results);