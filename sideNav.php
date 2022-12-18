<html>
<head>
<?php include 'head.php'; ?>
</head>
	
<body>	
	<div id="sideNav">
	
		<nav>
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="report.php">Reporting Form</a></li>
			<li><a href="list.php">Disaster List</a></li>
			<li><a href="aboutus.php">About Our Page</a></li>	
			<li><a href="index.php?logout='1'" style="color: red;">Logout</a></li>	
		</ul>
		</nav>
	</div>
	
	<div id="menuBtn">
		<img src="images/menu.jpg" id="menu">
	</div>
	
	
	<script>
	var menuBtn = document.getElementById("menuBtn")
	var sideNav = document.getElementById("sideNav")
	var menu = document.getElementById("menu")
	
	sideNav.style.right="-250px";
	
	menuBtn.onclick=function(){
		if (sideNav.style.right=="-250px"){
			sideNav.style.right="0";
			menu.src="images/close.png";
		}
		else{
			sideNav.style.right="-250";
			menu.src="images/menu.jpg";
		}
	}
	</script>	
</body>
</html>