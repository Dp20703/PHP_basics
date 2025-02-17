<?php
include("con.php");
$action="Add";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form</title>
<script>
function can(){
    window.location="index.php";
}
</script>
</head>

<body>
<form action="std_query.php" method="post">
    <input type="hidden" name="Action" value="<?php echo $action; ?>">
    <input type="hidden" name="sid" value="">

  <table>
<tbody>

        <tr>
            <td><label>Full name</label></td>
            <td><input type="text" name="FullName" value="" required></td>
        </tr>

        <tr>
            <td><label>Email</label></td>
            <td><input type="email" name="Email" value="" required></td>
        </tr>

        <tr>
            <td><label>Mobile</label></td>
            <td><input type="tel" name="Mobile" value="" required maxlength="10"></td>
        </tr>

        <tr>
            <td><label>Password</label></td>
            <td><input type="password" name="Password" value="" required autocomplete="off"></td>
        </tr>
 
        <tr>
            <td><label>State</label></td>
            <td>
                <select name="State">
                    <option value="">Please select</option>
                    <?php
                    $state="SELECT * FROM state ORDER BY state_Name ASC";
                    $query=mysqli_query($con, $state);
                    while($res=mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?php echo htmlspecialchars($res["State_Id"]); ?>">
                        <?php echo htmlspecialchars($res["State_Name"]); ?>
                    </option>
                    <?php 
                    }
                    ?>
                </select>
            </td>
        </tr>
 <tr>
            <td>
                <input type="submit" name="Submit" value="Submit">
                <input type="reset" name="reset" value="Reset">
                <button value="cancel" ame="cancel" onclick="can();">Cancel</button>
            </td>
        </tr>
</tbody>
      
    </table>
</form>
</body>
</html>
