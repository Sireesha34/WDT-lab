<?php include 'header.php';
if(isset($_POST['deletebtn'])){
    include "config.php";
    $stu_id = $_POST['sid'];
    $sql = "DELETE FROM student WHERE sid = {$stu_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
    header("Location: http://localhost/Experiment10/index.php");
    mysqli_close($conn);
}
?>

<div id="main-content">
    <h2 align="center">Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" align="center">
        <div class="form-group" align="center">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit"  name="deletebtn"  value="Delete" />
    </form>
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
