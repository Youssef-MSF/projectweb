<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Web_dashboard/dashboard.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<br><br><br><br>
	<div id="middle_content" class="container">
		<div id="image_container">
			<div id="image_info">
				<img class="image" src="Web_dashboard/imgs/raw.jpg" alt="PC protable:Predator">
				<p class="info"><span style="color: blue;font-weight: bolder;">PC protable</span><br><span style="color: red">Predator</span><br>8999DH</p>
			</div>
		</div>
		<?php 
			for ($i=0; $i <12 ; $i++) { 
				echo('<div id="image_container">
						<div id="image_info">
							<img class="image" src="Web_dashboard/imgs/raw.jpg" alt="PC protable:Predator">
							<p class="info"><span style="color: blue;font-weight: bolder;">PC protable</span><br><span style="color: red">Predator</span><br>8999DH</p>
						</div>
					</div>
				');
			}
		?>
	</div>
</body>
</html>