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
		
		return $cost;
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
		
		return $cost;
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
		
		return $cost;
	}
		
	
?>