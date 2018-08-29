<?php 
$location= $_POST['location'];
$hours= $_POST['txtHours'];

if ($location=="inCounty"){
	
	$total= CalcLorainRes($hours);
	echo  nl2br ("Residency Status: In County \n Credit Hours: $hours \n Tuition: $ $total");

}

if ($location=="outCounty"){
	
	$total= CalcOutCountyRes($hours);
	echo  nl2br ("Residency Status: Out-of-County \n Credit Hours: $hours \n Tuition: $ $total");
}

if ($location=="outState"){
	
	$total= CalcOutStateRes($hours);
	echo  nl2br ("Residency Status: Out-of-State \n Credit Hours: $hours \n Tuition: $ $total");
}

if ($location==""){
	
	echo ("<b>*Error - Please choose Status.</b>");
}


?>
<?php
	function CalcLorainRes($argHours){
		$costperhour=134.04;
		
		if ($argHours >= "13" && $argHours <="18") {
			$cost=13*$costperhour;
		}
		elseif ($argHours >= "19"){
			$cost=($argHours-5)*$costperhour;
		}
		else {
			$cost=$argHours*$costperhour;
		}
		
		return number_format((float)$cost, 2, '.', '');
	}
	
	function CalcOutCountyRes($argHours){
		$costperhour=159.22;
		
		if ($argHours >= "13" && $argHours <="18") {
			$cost=13*$costperhour;
		}
		elseif ($argHours >= "19"){
			$cost=($argHours-5)*$costperhour;
		}
		else {
			$cost=$argHours*$costperhour;
		}
		
		return number_format((float)$cost, 2, '.', '');
	}
	
	function CalcOutStateRes($argHours){
		$costperhour=310.79;
		
		if ($argHours >= "13" && $argHours <="18") {
			$cost=13*$costperhour;
		}
		elseif ($argHours >= "19"){
			$cost=($argHours-5)*$costperhour;
		}
		else {
			$cost=$argHours*$costperhour;
		}
		
		return number_format((float)$cost, 2, '.', '');
	}
?>