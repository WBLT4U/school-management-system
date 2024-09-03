

<?php $country=$_GET['country'];
require "../connect.php";
$query=mysqli_query($conn, "SELECT * FROM app_charge WHERE class='$country'");


?>
<select name="state">
<?php while($row=mysqli_fetch_array($query)) { ?>
<option value="<?php echo $row['appcharge']?>"><?php echo $row['appcharge']?></option>
<?php } ?>
</select>
