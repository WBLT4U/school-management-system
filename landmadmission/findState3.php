

<?php $country=$_GET['country'];
require "../connect.php";
$query=mysqli_query($conn, "SELECT * FROM reg_charge3 WHERE class='$country'");


?>
<select name="state">
<?php while($row=mysqli_fetch_array($query)) { ?>
<option value="<?php echo $row['student']?>"><?php echo $row['student']?></option>
<?php } ?>
</select>
