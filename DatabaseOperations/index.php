<?php
include 'header.php';
?>
<div id="main-content">
<?php
include 'config.php';
$sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass =
studentclass.cid";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
if(mysqli_num_rows($result) > 0) {
?>
<h2 align="center">All Records</h2>
<table cellpadding="7px" align="center">
<thead>
<th>Id</th>
<th>Name</th>
<th>Address</th>
<th>Class</th>
<th>Phone</th>
<th>Action</th>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['sid']; ?></td>
<td><?php echo $row['sname']; ?></td>
<td><?php echo $row['saddress']; ?></td>
<td><?php echo $row['cname']; ?></td>
<td><?php echo $row['sphone']; ?></td>
<td>
<a href='edit.php?id=<?php echo $row['sid']; ?>'>Edit</a>
<a href='delete-inline.php?id=<?php echo $row['sid']; ?>'>Delete</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
<?php }else{
echo "<h2>No Record Found</h2>";
}
mysqli_close($conn);
?>
</div>
</div>

<head>
<style>
.footer{
position:fixed;
left:0;
bottom:0;
width:100%;
color:white;
background:green;
text-align:center;
}
</style>
</head>
<div class="footer">
<p align="center"> &copy; N.Ushasree--Allrights Reserved
</body>
</html>
