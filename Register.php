<?php
$con = mysqli_connect("localhost", "ehgus83133", "rnjs2264@@", "ehgus83133_godohosting_com");

$userID = $_POST["userID"];
$userPassword = $_POST["userPassword"];
$userName = $_POST["userName"];
$userMajor = $_POST["userMajor"];

$statement = mysqli_prepare($con, "INSERT INTO USER VALUES(?, ?, ?, ?)");
mysqli_stmt_bind_param($statement, "ssss", $userID, $userPassword, $userName, $userMajor);
mysqli_stmt_execute($statement);

$response = array();
$response["success"] = true;

echo json_encode($response);

?>
