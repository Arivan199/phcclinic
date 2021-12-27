<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Donor_ID</th>
<th>Aadhar_no</th>
<th>Name</th>
</tr>
<?php
include 'configure.php';
$Blood_Group=$_POST['Blood_Group'];
$sql = "SELECT Donor_Id, Aadhar_no,Name FROM form where Blood_Group='$Blood_Group'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Donor_Id"]. "</td><td>" . $row["Aadhar_no"] . "</td><td>"
. $row["Name"];
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<form action="/" method="post">
        <fieldset>
            <div class="wrapper">
        <button>Go to Main Page</button>
        </div>    
    </fieldset>
        </form>
</body>
</html>