<!doctype html>
<html>
	<head>
		<title>Lorain County Community College</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php
			include ("head-data.inc");
		?>
		<link rel="stylesheet" type="text/css" href="style.css">		
		<script>
		function check_field(id, id2) {
			var field = document.getElementById(id);
			var field2 = document.getElementById(id2);

			if (isNaN(field.value) || field.value == "") {
				document.getElementById("msg").style.color = "red";
				document.getElementById("msg").style.textAlign = "center";
				document.getElementById("msg").innerHTML = "<b>*Error - Please enter Hours.</b>";
			}
			else if (field2.value == "") {
				document.getElementById("msg").style.color = "red";
				document.getElementById("msg").style.textAlign = "center";
				document.getElementById("msg").innerHTML = "<b>*Error - Please choose Status.</b>";
			}			
			else{
				ajax_post();
			}
		}
		</script>
		<script>
		function ajax_post(){
			// Create our XMLHttpRequest object
			var hr = new XMLHttpRequest();
			// Create some variables we need to send to our PHP file
			var url = "check.php";
			var txthr = document.getElementById("txtHours").value;
			var loc = document.getElementById("location").value;
			var vars = "txtHours="+txthr+"&location="+loc;
			hr.open("POST", url, true);
			// Set content type header information for sending url encoded variables in the request
			hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			// Access the onreadystatechange event for the XMLHttpRequest object
			hr.onreadystatechange = function() {
				if(hr.readyState == 4 && hr.status == 200) {
					var return_data = hr.responseText;
					document.getElementById("msg").innerHTML = return_data;
				}
			}
			// Send the data to PHP now... and wait for response to update the status div
			hr.send(vars); // Actually execute the request
			document.getElementById("msg").style.color = "green";
			document.getElementById("msg").style.textAlign = "center";
			document.getElementById("msg").innerHTML = "";
		}
		</script>	
	</head>
	<body>
		<?php	
			include ("header.inc");
		?>
		<?php
			include ("carousel.inc");
		?>
		<section class="content" id="calculator">
			<h1>Tuition Calculator</h1>
			<h2>Spring 2018</h2>
			<div id="myinput">
				<span><strong>Credit Hours:</strong></span>			
				<input required type="text" name="txtHours" id="txtHours" placeholder="">

				<span><strong>Residency Status:</strong></span>
				<select required name="Residency" id="location">
					<option value="">Select County</option>
					<option value="inCounty">In County</option>
					<option value="outCounty">Out-of-County</option>
					<option value="outState">Out-of-State</option>
				</select>
				<br><br>
				
				<input  type="submit" value="Calculate" name="btnSubmit" onclick="check_field('txtHours','location')"><br><br>
				<div id="msg"></div>
			</div>			
		</section>
		<?php
			include ("footer.inc");	
		?>
	</body>
</html>