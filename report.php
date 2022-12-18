<?php include 'mustregister.php'; ?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Post-Disaster</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<section id="banner">
  <div class="header">
  	<h2>Disaster Report</h2>
  </div>
	 
  <form method="post" action="report.php">
  	<?php include('errors.php'); ?>
	
  	<div class="input-group">
  		<label>Location of effected area:</label>
  		<input type="text" name="location" >
  	</div>
	
  	<div class="input-group">
  		<label>Types of Natural Disaster:</label>
  		<input type="checkbox" name="type" id="tornadoes" value="tornadoes">
          <label for="tornadoes">Tornadoes</label>
          <input type="checkbox" name="type" id="hurricanes" value="hurricanes">
          <label for="hurricanes">Hurricanes and Tropical Stroms</label>
          <input type="checkbox" name="type" id="floods" value="floods">
          <label for="floods">Floods</label>
		  <input type="checkbox" name="type" id="wildfires" value="wildfires">
          <label for="wildfires">Wildfires</label>
		  <input type="checkbox" name="type" id="earthquakes" value="earthquakes">
          <label for="earthquakes">Earthquakes</label>
		  <input type="checkbox" name="type" id="drought" value="drought">
          <label for="drought">Drought</label>
  	</div>
	
	<div class="input-group">
  		<label>How many times did it happen during the month?</label>
  		<input type="number" name="amount" id="amount">
  	</div>
	
	<div class="input-group">
  		<label>Anything else you want to add?<label>
  		<textarea id="extra" name="extra" rows="3" cols="40"></textarea>
  	</div>
	
  	<div class="input-group">
  		<button type="submit" class="btn" name="report_report">Submit</button>
  	</div>

  </form>
 <?php include 'sideNav.php';?>
 </section>
</body>
</html>