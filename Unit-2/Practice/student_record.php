<?php
include("con.php");
session_start();

// Check if the user is logged in
$username = isset($_SESSION["username"]) ? $_SESSION["username"] : "Guest";

// Fetch student records
$sel_qry = "SELECT * FROM state"; // ✅ Corrected table name
$res = mysqli_query($con, $sel_qry);

// Check if the query is successful
if (!$res) {
    die("❌ Error fetching records: " . mysqli_error($con));
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Record</title>
</head>
<body>

<h2>Welcome, <?php echo htmlspecialchars($username); ?></h2>

<table border='1'>
<tr>
    <th>Student Id</th>
    <th>Full Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>State</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>

<?php
// ✅ Corrected PHP while loop
while ($row = mysqli_fetch_array($res)) {
?>
<tr>
    <td><?php echo htmlspecialchars($row["Student_ID"]); ?></td>
    <td><?php echo htmlspecialchars($row["FullName"]); ?></td>
    <td><?php echo htmlspecialchars($row["Email"]); ?></td>
    <td><?php echo htmlspecialchars($row["Mobile"]); ?></td>

    <?php
    // ✅ Fetch state name from the state table
    $st = "SELECT State_Name FROM state WHERE State_Id='" . $row["State_Id"] . "'";
    $str = mysqli_query($con, $st);
    $strow = mysqli_fetch_array($str);
    ?>

    <td><?php echo htmlspecialchars($strow["State_Name"]); ?></td>
    <td><a href="reg.php?Action=Edit&sid=<?php echo $row["Student_ID"]; ?>">Edit</a></td>
    <td><a href="reg.php?Action=Delete&sid=<?php echo $row["Student_ID"]; ?>">Delete</a></td>
</tr>
<?php
}
?>
</table>

</body>
</html>
