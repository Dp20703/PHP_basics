<?php 
include("con.php");

// Ensure database connection is successful
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Retrieve and sanitize form data
$Action = isset($_POST["Action"]) ? $_POST["Action"] : "";
$sid = isset($_POST["sid"]) ? $_POST["sid"] : "";
$FullName = isset($_POST["FullName"]) ? mysqli_real_escape_string($con, $_POST["FullName"]) : "";
$Email = isset($_POST["Email"]) ? mysqli_real_escape_string($con, $_POST["Email"]) : "";
$Mobile = isset($_POST["Mobile"]) ? mysqli_real_escape_string($con, $_POST["Mobile"]) : "";
$Password = isset($_POST["Password"]) ? mysqli_real_escape_string($con, $_POST["Password"]) : "";
$stid = isset($_POST["State"]) ? mysqli_real_escape_string($con, $_POST["State"]) : "";

// Secure password storage
$hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

// If action is "Add", insert the record
if ($Action == "Add") {
    $ins_qry = "INSERT INTO state (FullName, Email, Mobile, Password, State_Id) 
                VALUES ('$FullName', '$Email', '$Mobile', '$hashedPassword', '$stid')";

    $res = mysqli_query($con, $ins_qry);
    
    if ($res) {
        echo "✅ Record Inserted Successfully";
    } else {
        echo "❌ Error: " . mysqli_error($con);
    }
} // ✅ This closing brace ensures the if condition is closed properly

// Close database connection
mysqli_close($con);
?>
