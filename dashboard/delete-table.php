<!-- delete-table.php -->
<?php
	if (isset($_GET['table_id'])) {
		$id =$_GET['table_id'];
		$tbl_id = $_GET['table_id'];
		$sql ="DELETE FROM `restaurant_tables` WHERE id = '$id';";
		include_once 'dbCon.php';
		$con = connect();
		if ($con->query($sql) === TRUE) {
		echo '<script>alert("DELETED.")</script>'; ?>
		<script type="text/javascript">
			var dist = <?php echo $tbl_id; ?>;
		</script>
<?php		
		echo '<script>window.location.href ="table-list.php?table_id=" + dist;</script>';
		//header("Location: table-list.phpp?table_id=".$tbl_id."");
	    } else {
			echo "Error: " . $sql . "<br>" . $con->error;
		} 
	}
?>