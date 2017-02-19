<?php
$error = "NO_ERROR";
$error_code = "000";
$error_desc = "No error";
$location = "";
$location_name= "";
$hours= "";
$minutes= "";
$seconds= "";
$meridiem= "";
$day= "";
$month= "";
$date= "";
$year= "";

if( !isset($_GET['location']))
{
	$error_code = "001";
	$error = "DATA_INCOMPLETE_ERROR";
	$error_desc = "The required parameters are missing. Please refer documentation for more details. Please visit https://akshayanandraut.github.io/api-utc";
}
else{
		$location = strtoupper($_GET['location']);
		
		$array = array("AF","Afghanistan","AX","Aland Islands","AL","Albania","DZ","Algeria","AS","American Samoa","AD","Andorra","AO","Angola","AI","Anguilla","AG","Antigua and Barbuda","AQ-AD","Adelaide Island","AQ-AL","Adelie Land","AQ-AI","Anvers Island","AQ-BP","Bailey Peninsula","AQ-EL","Enderby Land","AQ-HB","Holme Bay","AQ-LV","Lake Vostok","AQ-QM","Queen Maud Land","AQ-RK","Russkaya","AQ-SP","South Pole","AQ-VH","Vestfold Hills","AR-BA","Buenos Aires","AR-CT","Catamarca","AR-CC","Chaco","AR-CH","Chubut","AR-DF","Ciudad de Buenos Aires","AR-CB","Córdoba","AR-CN","Corrientes","AR-ER","Entre Rios","AR-FM","Formosa","AR-JY","Jujuy","AR-LP","La Pampa","AR-LR","La Rioja","AR-MZ","Mendoza","AR-MN","Misiones","AR-NQ","Neuquén","AR-RN","Rio Negro","AR-SA","Salta","AR-SJ","San Juan","AR-SL","San Luis","AR-SC","Santa Cruz","AR-SF","Santa Fe","AR-SE","Santiago del Estero","AR-TF","Tierra del Fuego","AR-TM","Tucumán","AM","Armenia","AW","Aruba","AU-ACT","Australian Capital Territory","AU1","Lord Howe Island","AU-NSW","New South Wales","AU3","New South Wales (exception)","AU-NT","Northern Territory","AU-QLD","Queensland","AU-SA","South Australia","AU-TAS","Tasmania","AU-VIC","Victoria","AU-WA","Western Australia","AU-WA1","Western Australia (Exception)","AT","Austria","AZ","Azerbaijan","BS","Bahamas","BH","Bahrain","BD","Bangladesh","BB","Barbados","BY","Belarus","BE","Belgium","BZ","Belize","BJ","Benin","BM","Bermuda","BT","Bhutan","BIOT","British Indian Ocean Territory(BIOT)","BO","Bolivia, Plurinational State of","BQ","Bonaire, Sint Eustatius and Saba","BA","Bosnia and Herzegovina","BW","Botswana","BR-AC","Acre","BR-AL","Alagoas","BR-AP","Amapa","BR-AM","Amazonas","BR-AM1","Amazonas (far west)","BR-BA","Bahia","BR-CE","Ceara","BR-DF","Distrito Federal","BR-ES","Espirto Santo","BR-FN","Fernando de Noronha","BR-GO","Goias","BR-MA","Maranhao","BR-MT","Mato Grosso","BR-MT1","Mato Grosso (Araguaia region)","BR-MS","Mato Grosso do Sul","BR-MG","Minas Gerais","BR-PA1","Para (eastern)","BR-PA2","Para (western)","BR-PB","Paraiba","BR-PR","Parana","BR-PE","Pernambuco","BR-PI","Piaui","BR-RJ","Rio de Janeiro","BR-RN","Rio Grande do Norte","BR-RS","Rio Grande do Sul","BR-RO","Rondonia","BR-RR","Roraima","BR-SC","Santa Catarina","BR-SP","Sao Paulo","BR-SE","Sergipe","BR-TO","Tocantins","BN","Brunei Darussalam","BG","Bulgaria","BF","Burkina Faso","BI","Burundi","CV","Cabo Verde","KH","Cambodia","CM","Cameroon","CA-AB","Alberta","CA-BC","British Columbia","CA-BC1","British Columbia (exception 1)","CA-BC2","British Columbia (exception 2)","CA2","Labrador","CA2A","Labrador (exception)","CA-MB","Manitoba","CA-NB","New Brunswick","CA-NF","Newfoundland","CA-NT","Northwest Territories","CA-NS","Nova Scotia","CA-NT2A","Nunavut - Southampton Island","CA-NT2B","Nunavut (Central)","CA-NT2","Nunavut (Eastern)","CA-NT2C","Nunavut (Mountain)","CA-ON","Ontario","CA-ON1","Ontario (western)","CA-PE","Prince Edward Island","CA-QC","Quebec","CA-QC1","Quebec (far east)","CA-SK","Saskatchewan","CA-SK2","Saskatchewan (exceptions - east)","CA-SK1","Saskatchewan (exceptions - west)","CA-YT","Yukon","KY","Cayman Islands","CF","Central African Republic","TD","Chad","CL","Chile","CL2","Easter Island","CL3","Magallanes","CN","China","CX","Christmas Island (Indian Ocean)","CC","Cocos (Keeling) Islands","CO","Colombia","KM","Comoros","CG","Congo","CD2","(Congo,Democratic Republic Eastern)","CD","(Congo, Democratic Republic Western)","CK","Cook Islands","CR","Costa Rica","CI","Cote DIvoire","HR","Croatia","CU","Cuba","CW","Curaçao","CY","Cyprus","CY2","Cyprus,Northern","CZ","Czech Republic","DK","Denmark","DJ","Djibouti","DM","Dominica","DO","Dominican Republic","EC","Ecuador","EC2","Galapagos Islands","EG","Egypt","SV","El Salvador","GQ","Equatorial Guinea","ER","Eritrea","EE","Estonia","ET","Ethiopia","FK","Falkland Islands (Malvinas)","FO","Faroe Islands","FJ","Fiji","FI","Finland","FR","France","GF","French Guiana","PF2A","Austral Islands","PF3","Gambier Islands","PF1","Marquesas Islands","PF","Society Islands (including Tahiti)","PF2B","Tuamotu Archipelago","GA","Gabon","GM","Gambia","GE","Georgia","DE","Germany","GH","Ghana","GI","Gibraltar","GR","Greece","GL4","Danmarkshavn","GL","Greenland","GL3","Ittoqqortoormiit","GL2","Pituffik","GD","Grenada","GP","Guadeloupe","GU","Guam","GT","Guatemala","GG","Guernsey","GN","Guinea","GW","Guinea-Bissau","GY","Guyana","HT","Haiti","VA","Holy See","HN","Honduras","HK","Hong Kong","HU","Hungary","IS","Iceland","IN","India","ID2","(Indonesia Central)","ID3","(Indonesia Eastern)","ID","(Indonesia Western)","IR","Iran, Islamic Republic of","IQ","Iraq","IE","Ireland","IM","Isle of Man","IL","Israel","IT","Italy","JM","Jamaica","JP","Japan","JE","Jersey","UM1","Johnston Atoll (U.S.)","JO","Jordan","KZ","(Kazakhstan Eastern)","KZ1","(Kazakhstan Western)","KE","Kenya","KI","Gilbert Islands","KI2","Line Islands","KI3","Phoenix Islands","KP","Korea, Democratic Peoples Republic of","KR","Korea, Republic of","KW","Kuwait","KG","Kyrgyzstan","LA","Lao Peoples Democratic Republic","LV","Latvia","LB","Lebanon","LS","Lesotho","LR","Liberia","LY","Libya","LI","Liechtenstein","LT","Lithuania","LU","Luxembourg","MO","Macao","MK","Macedonia, The Former Yugoslav Republic Of","MG","Madagascar","MW","Malawi","MY","Malaysia","MV","Maldives","ML","Mali","MT","Malta","MH","Marshall Islands","MQ","Martinique","MR","Mauritania","MU","Mauritius","YT","Mayotte","MX-AGU","Aguascalientes","MX-BCN","Baja California","MX-BCN1","Baja California (Border Region)","MX-BCS","Baja California Sur","MX-CAM","Campeche","MX-CHP","Chiapas","MX-CHH","Chihuahua","MX-CHH1","Chihuahua (Border Region)","MX-COA","Coahuila","MX-COA1","Coahuila (Border Region)","MX-COL","Colima","MX-DIF","Distrito Federal","MX-DUR","Durango","MX-GUA","Guanajuato","MX-GRO","Guerrero","MX-HID","Hidalgo","MX-JAL","Jalisco","MX-MEX","Mexico State","MX-MIC","Michoacán","MX-MOR","Morelos","MX-NAY","Nayarit","MX-NAY1","Nayarit (Exception)","MX-NLE","Nuevo León","MX-NLE1","Nuevo León (Border Region)","MX-OAX","Oaxaca","MX-PUE","Puebla","MX-QUE","Querétaro","MX-ROO","Quintana Roo","MX-SLP","San Luis Potosí","MX-SIN","Sinaloa","MX-SON","Sonora","MX-TAB","Tabasco","MX-TAM","Tamaulipas","MX-TAM1","Tamaulipas (Border Region)","MX-TLA","Tlaxcala","MX-VER","Veracruz","MX-YUC","Yucatan","MX-ZAC","Zacatecas","FM","Kosrae, Pohnpei","FM1","Yap, Chuuk","UM2","Midway Islands (U.S.)","MD","Moldova, Republic of","MC","Monaco","MN","(Mongolia Central and Eastern)","MN1","(Mongolia Western)","ME","Montenegro","MS","Montserrat","MA","Morocco","MZ","Mozambique","MM","Myanmar","NA","Namibia","NR","Nauru","NP","Nepal","NL","Netherlands","NC","New Caledonia","NZ","New Zealand","NZ2","Chatham Islands","NI","Nicaragua","NE","Niger","NG","Nigeria","NU","Niue","NF","Norfolk Island","MP","Northern Mariana Islands","NO","Norway","OM","Oman","PK","Pakistan","PW","Palau","PS1","Gaza Strip","PS","West Bank","UM4","Palmyra Atoll (US)","PA","Panama","PG","Papua New Guinea","PG-NSB","Bougainville","PY","Paraguay","PE","Peru","PH","Philippines","PN","Pitcairn","PL","Poland","PT","Portugal","PT2","Azores","PT1","Madeira Islands","PR","Puerto Rico","QA","Qatar","RE","Reunion","RO","Romania","RU-AD","Adygea","RU-AL","Altai Republic","RU-ALT","Altaskiy Kray","RU-AMU","Amur","RU-ARK","Arkhangel","RU-AST","Astrakhan","RU-BA","Bashkortostan","RU-BEL","Belgorod","RU-BRY","Bryansk","RU-BU","Buryatia","RU-CE","Chechnya","RU-CHE","Chelyabinsk","RU-CHU","Chukot","RU-CU","Chuvashia","RU-RC","Crimea, Republic of","RU-DA","Dagestan","RU-IN","Ingushetia","RU-IRK","Irkutsk","RU-IVA","Ivanovo","RU-YEV","Jewish Autonomous Oblast","RU-KB","Kabardino-Balkaria","RU-KGD","Kaliningrad","RU-KL","Kalmykia","RU-KLU","Kaluga","RU-KAM","Kamchatka","RU-KC","Karachay-Cherkessia","RU-KR","Karelia","RU-KEM","Kemerovo","RU-KHA","Khabarovsk","RU-KK","Khakassia","RU-KHM","Khanty-Mansi","RU-KIR","Kirov","RU-KO","Komi","RU-KOS","Kostroma","RU-KDA","Krasnodar","RU-KYA","Krasnoyarsk","RU-KGN","Kurgan","RU-KRS","Kursk","RU-LEN","Leningradskaya Oblast","RU-LIP","Lipetsk","RU-MAG","Magadan","RU-ME","Mari El","RU-MO","Mordovia","RU-MOW","Moscow City","RU-MOS","Moskva","RU-MUR","Murmansk","RU-NEN","Nenets","RU-NIZ","Nizhniy Novgorod","RU-SE","North Ossetia-Alania","RU-NGR","Novgorod","RU-NVS","Novosibirsk","RU-OMS","Omsk","RU-ORL","Orel","RU-ORE","Orenburg","RU-PNZ","Penza","RU-PER","Perm","RU-PRI","Primorskiy","RU-PSK","Pskov","RU-ROS","Rostov","RU-RYA","Ryazan","RU-SA2","Sakha (Central)","RU-SA3","Sakha (Eastern)","RU-SA","Sakha (Western)","RU-SAK","Sakhalin","RU-SAK2","Sakhalin (Kuril Islands)","RU-SAM","Samara","RU-SAR","Saratov","RU-SEV","Sevastopol","RU-SMO","Smolensk","RU-SPE","St. Petersburg City","RU-STA","Stavropol","RU-SVE","Sverdlovsk","RU-TAM","Tambov","RU-TA","Tatarstan","RU-TOM","Tomsk","RU-TUL","Tula","RU-TY","Tuva","RU-TVE","Tver","RU-TYU","Tyumen","RU-UD","Udmurtia","RU-ULY","Ulyanovsk","RU-VLA","Vladimir","RU-VGG","Volgograd","RU-VLG","Vologda","RU-VOR","Voronezh","RU-YAN","Yamalo-Nenets","RU-YAR","Yaroslavl","RU-ZAB","Zabaykalsky","RW","Rwanda","BL","Saint Barthelemy","SH","Saint Helena, Ascension and Tristan da Cunha","KN","Saint Kitts and Nevis","LC","Saint Lucia","MF","Saint Martin","PM","Saint Pierre and Miquelon","VC","Saint Vincent and The Grenadines","WS","Samoa","SM","San Marino","ST","Sao Tome and Principe","SA","Saudi Arabia","SN","Senegal","RS","Serbia","SC","Seychelles","SL","Sierra Leone","SG","Singapore","SX","Sint Maarten (Dutch part)","SK","Slovakia","SI","Slovenia","SB","Solomon Islands","SO","Somalia","ZA","South Africa","SS","South Sudan, Republic of","ES2","Canary Islands","ES","Mainland,Baleares,Melilla"," LK","Sri Lanka","SD","Sudan","SR","Suriname","SJ","Svalbard and Jan Mayen","SZ","Swaziland","SE","Sweden","CH","Switzerland","SY","Syrian Arab Republic","TW","Taiwan","TJ","Tajikistan","TZ","Tanzania, United Republic of","TH","Thailand","TL","Timor-Leste","TG","Togo","TK","Tokelau","TO","Tonga","TT","Trinidad and Tobago","TN","Tunisia","TR","Turkey","TM","Turkmenistan","TC","Turks and Caicos Islands","TV","Tuvalu","UG","Uganda","UA","Ukraine","AE","United Arab Emirates","GB","United Kingdom","US-AL","Alabama","US-AK","Alaska","US-AK1","Alaska (Aleutian Islands)","US-AZ","Arizona","US-AZ1","Arizona (Navajo Reservation)","US-AR","Arkansas","US-CA","California","US-CO","Colorado","US-CT","Connecticut","US-DE","Delaware","US-DC","District of Columbia","US-FL","Florida","US-FL1","Florida (far west)","US-GA","Georgia","US-HI","Hawaii","US-ID1","Idaho (northern)","US-ID","Idaho (southern)","US-IL","Illinois","US-IN","Indiana","US-IN1","Indiana (far west)","US-IA","Iowa","US-KS","Kansas","US-KS1","Kansas (exception)","US-KY","Kentucky (eastern)","US-KY1","Kentucky (western)","US-LA","Louisiana","US-ME","Maine","US-MD","Maryland","US-MA","Massachusetts","US-MI","Michigan","US-MI1","Michigan (exception)","US-MN","Minnesota","US-MS","Mississippi","US-MO","Missouri","US-MT","Montana","US-NE","Nebraska","US-NE1","Nebraska (western)","US-NV","Nevada","US-NV1","Nevada (exception)","US-NH","New Hampshire","US-NJ","New Jersey","US-NM","New Mexico","US-NY","New York","US-NC","North Carolina","US-ND","North Dakota","US-ND1","North Dakota (western)","US-OH","Ohio","US-OK","Oklahoma","US-OR","Oregon","US-OR1","Oregon (exception)","US-PA","Pennsylvania","US-RI","Rhode Island","US-SC","South Carolina","US-SD","South Dakota (eastern)","US-SD1","South Dakota (western)","US-TN1","Tennessee (eastern)","US-TN","Tennessee (western)","US-TX","Texas","US-TX1","Texas (far west)","US-UT","Utah","US-VT","Vermont","US-VA","Virginia","US-WA","Washington","US-WV","West Virginia","US-WI","Wisconsin","US-WY","Wyoming","UY","Uruguay","UZ","Uzbekistan","VU","Vanuatu","VE","Venezuela","VN","Viet Nam","VG","Virgin Islands (British)","VI","Virgin Islands (U.S.)","UM3","Wake Island (U.S.)","WF","Wallis and Futuna","EH","Western Sahara","YE","Yemen","ZM","Zambia","ZW","Zimbabwe");
		
		if( !in_array($location,$array) && $location!="UTC")
		{
			$error_code = "002";
			$error = "INVALID_LOCATION_ERROR";
			$error_desc = "Please check the location. it does not seem to be a valid location code. Please refer documentation and currency codes for more details. Please visit https://akshayanandraut.github.io/api-utc";
		}
		else
		{
			header('Content-type: text/html');
			$curl_handle=curl_init();
			if($location == "UTC")
			{
				curl_setopt($curl_handle, CURLOPT_URL,'http://www.worldtimeserver.com/time-zones/utc/');
			}
			else
			{
				curl_setopt($curl_handle, CURLOPT_URL,'http://www.worldtimeserver.com/current_time_in_'.$location.'.aspx');
			}
			
			
			curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
			curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl_handle, CURLOPT_USERAGENT, 'API-UTC');
			$resp = curl_exec($curl_handle);
			curl_close($curl_handle);
			
				$start_at = strpos($resp,'theTime')+24;
				$till = (strpos($resp,'</span>',$start_at));			
				$time = trim(substr($resp,$start_at,$till-$start_at));		
				
				$start_at = strpos($resp,'font6',$start_at)+7;				
				$till = (strpos($resp,'</span>',$start_at));				
				$calendar = trim(substr($resp,$start_at,$till-$start_at));				
					
				$full_string = $time.' '.$calendar;
					
				$hours = trim(substr($time,0,strpos($time,':',0)));
				$time = trim(substr($time,strpos($time,':',0)+1,strlen($time)));			
				$minutes = trim(substr($time,0,strpos($time,':',0)));
				$time = trim(substr($time,strpos($time,':',0)+1,strlen($time)));						
				$seconds = trim(substr($time,0,strpos($time,' ',0)));
				$time = trim(substr($time,strpos($time,' ',0)+1,strlen($time)));			
				$meridiem = trim(substr($time,strlen($time)-2));
				
				$day = trim(substr($calendar,0,strpos($calendar,',',0)));
				$calendar = trim(substr($calendar,strpos($calendar,',',0)+1,strlen($calendar)));
				$month= trim(substr($calendar,0,strpos($calendar,' ',0)));
				$calendar = trim(substr($calendar,strpos($calendar,' ',0)+1,strlen($calendar)));
				$date = trim(substr($calendar,0,strpos($calendar,',',0)));
				$calendar = trim(substr($calendar,strpos($calendar,',',0)+1,strlen($calendar)));
				$year = $calendar;
				
				
				if($location == "UTC")
					$location_name = "Universal Coordinated Time";
				else{
					$index = array_search($location,$array);
					$location_name = $array[$index+1];
				}
				
				
				
		}
			
		
		
		
}
				if(isset($_GET['format']) && strtoupper($_GET['format']) == "XML")
				{	header('Content-type: text/plain');
					$output = '<?xml version="1.0" encoding="UTF-8"?>
<data>
	<item>
		<location> '.$location.' <location>
		<location_name> '.$location_name.' </location_name>
		<hours> '.$hours.' </hours>
		<minutes> '.$minutes.' </minutes>
		<seconds> '.$seconds.' </seconds>
		<meridiem> '.$meridiem.' </meridiem>
		<day> '.$day.' </day>
		<month> '.$month.' </month>
		<date> '.$date.' </date>
		<year> '.$year.' </year>
		<error_no> '.$error_code.' </error_no>
		<error> '.$error.' </error>
		<error_desc> '.$error_desc.' </error_desc>
	</item>
</data>';
									echo trim($output);
				}
				else if(isset($_GET['format']) && strtoupper($_GET['format']) == "DIRECT")
				{	header('Content-type: text/plain');
					if($error_code != "000")
					{
						$output = 'ERROR '.$error_code.'. '.$error.'. '.$error_desc;
					}
					else{
						$output =	$full_string;
					}
									echo trim($output);

					
					
				}
				else
				{
					header('Content-type: text/json');
					$output =  '{
	"data": [{
		"location": "'.$location.'",
		"location_name": "'.$location_name.'",
		"hours": "'.$hours.'",
		"minutes": "'.$minutes.'",
		"seconds": "'.$seconds.'",
		"meridiem": "'.$meridiem.'",
		"day": "'.$day.'",
		"month": "'.$month.'",
		"date": "'.$date.'",
		"year": "'.$year.'",
		"error_no": "'.$error_code.'",
		"error": "'.$error.'",
		"error_desc": "'.$error_desc.'"
	}]
}';
									echo trim($output);

				}


?>