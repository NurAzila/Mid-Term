<?php include 'mustregister.php'; ?>
<?php include 'sideNav.php';?>
<html>
<head>
<?php include 'head.php'; ?>
</head>
	
<body>
<section id="banner">
	<table class="center" width="1000" border="2" cellpadding="0" cellspacing="0" >
		<tr>
			<th>No</th>
			<th>Location</th>
			<th>Type</th>
			<th>How often it happened</th>
			<th>Details Information</th>
			<th>Reported Time</th>
		</tr>
		<?php
		$db = mysqli_connect('localhost', 'root', '', 'disaster_report');
		if ($db->connect_error) {
			die("Connection failed: " . $db->connect_error);
			}
		$query = "SELECT * FROM report";
		$result = $db->query($query);
		
		if ($result->num_rows > 0){
			while ($row = $result-> fetch_assoc()){
				echo "<tr></td>" . $row["id"]. "</td></td>". $row["location"]. "</td></td>" . $row["type"]. "</td></td>"
				. $row["amount"]. "</td></td>" . $row["others"]. "</td></td>" . $row["timestamp"]. "</td></tr>";
			}
		}
		else{
			echo "No Results";
		}
		$db->close();
		?>
	</table>
</section>
</body>
</html>