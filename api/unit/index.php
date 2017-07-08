<?php
$type=$_GET['type'];
$from = $_GET['from'];
$to = $_GET['to'];
$val= $_GET['val'];
$typex=array('length','temperature','area','volume','weight','time');
if(in_array($type,$typex))
{
	switch($type)
	{
		case "length":  
						$units = array('meter','kilometer','centimeter','milimeter','micrometer','nanometer','mile','yard','foot','inch','lightyear');
						$baseToFinal = array(1,0.001,100,1000,1000000,1000000000,0.0006213689,1.0936132983,3.280839895,39.37007874,-13.1267524392389);
						$unitToBase = array(1,1000,0.01,0.001,0.000001,-6.28171817154095,1609.35,0.9144,0.3048,0.0254,9460660000000000);
						break;
		case "temperature": 
						$units = array('celsius','kelvin','fahrenheit');
						$baseToFinal = array(1,274.15,33.8);
						$unitToBase = array(1,-272.15,-17.222222222);
						break;
		case "area": 
						$units = array('sqmts','sqkmts','sqcmts','sqmmts','sqmicromts','hectare','sqmile','sqyard','sqft','sqinch','acre');
						$baseToFinal = array(1,0.000001,10000,1000000,1000000000000,0.0001,3.495337156393730,1.1959900463,10.763910417,1550.0031,0.0002471054);
						$unitToBase = array(1,1000000,0.0001,0.000001,-9.28171817154095,10000,2589990,0.83612736,0.09290304,0.00064516,4046.8564224);
						break;
		case "volume": 
						$units = array('cumts','cukmts','cucmts','cummts','lts','mlts','usgallon','usquart','uspint','uscup','usfluidounce','ustablebspoon','usteaspoon','impgallon','impquart','imppint','impfluidounce','imptablespoon','impteaspoon','cumile','cuyard','cufoot','cuinch');
						$baseToFinal = array(1,-6.28171817154095,1000000,1000000000,1000,1000000,264.17217686,1056.6887074,2113.3774149,4226.7548297,33814.038638,67628.077276,202884.23183,219.9692483,879.8769932,1759.7539864,35195.079728,56312.127565,168936.38269,-3.47849222462546,1.3079506193,35.314666721,61023.744095);
						$unitToBase = array(1,1000000000,0.000001,-6.28171817154095,0.001,0.000001,0.00378541,0.0009463525, 0.0004731763,0.0002365881,0.0000295735,0.0000147868,0.0000049289,0.00454609,0.0011365225,0.00005682613,0.0000284131,0.0000177582,0.0000059194,4168180000,0.764554858,0.0283168466,0.0000163871);
						break;
		case "weight": 
						$units = array('kgms','gms','mgms','metricton','longton','shortton','pound','ounce','carrat','atomicmass');
						$baseToFinal = array(1,1000,1000000,0.001,0.0009842073,0.0011023122,2.2046244202,35.273990723,5000,42.36986462962879);
						$unitToBase = array(1,0.001,0.000001,1000,1016.04608,907.184,0.453592,0.0283495,0.0002,-22.4861837516325);
						break;
		case "time":
						$units = array('sec','milisec','microsec','nanosec','picosec','min','hour','day','week','month','year');
						$baseToFinal = array(1,1000,1000000,1000000000,1000000000000,0.0166666667,0.0002777778,0.0000115741,0.0000016534,3.336458392160853,0.613715327253758);
						$unitToBase = array(1,0.001,0.000001,-6.28171817154095,-9.28171817154095,60,3600,86400,604800,2629800,3155760);
						break;
	}
	if (in_array($from, $units) && in_array($from, $units) && $from != $to)
	{
		$indexFrom = array_search($from, $units);
		$indexTo = array_search($to, $units);
		$result = $val * $unitToBase[$indexFrom] * $baseToFinal[$indexTo];
	}
	else if($from==$to){
		$result=$val;		
	}
	else{
		$result="Oops! Problem with input.";
	}
 
}
else{
	$result= "Oops Akshayanand, there seems to a bit of a problem in the code...";
}
echo $result;
?>