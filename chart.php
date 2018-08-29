<!doctype html>
<?php include ("tuitioncost.inc");?>
<html>
	<head>
		<title>Lorain County Community College</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php
			include ("head-data.inc");
		?>
		<link rel="stylesheet" type="text/css" href="style.css">		
		<style>
			table, th, td {text-align:center;}
			th{border: 1px solid black;}
			tr:nth-child(even){background-color: #dddddd;}
		</style>
	</head>
	<body>	
		<?php	
			include ("header.inc");
		?>
		<?php
			include ("carousel.inc");
		?>
		<section class="content" id="tuition">
			<h1>Tuition and Costs Chart</h1>
			<h2>Spring 2018</h2>
			<table id="mytable">
				<tr>
					<th>Semester Credit Hours</th>
					<th>Lorain County Resident</th>
					<th>Out-of-County Resident</th>
					<th>Out-of-State Resident</th>
				</tr>
			<?php
				for($hours=1;$hours <= 22;$hours=$hours+1)
					{
			?>
				<tr>
					<td><?php print($hours); ?></td>
					<td><?php print(CalcLorainRes($hours,2));?></td>
					<td><?php print(CalcOutCountyRes($hours,2));?></td>
					<td><?php print(CalcOutStateRes($hours,2));?></td>
				</tr>
			<?php
					}
			?>
			</table>
			<span>*Register for 13 to 18 credit hours and pay for only 13!</span>
		</section>
		<?php
			include ("footer.inc");	
		?>
	</body>
</html>