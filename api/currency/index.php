<?php 
if( !isset($_GET['from']) || !isset($_GET['to']) || !isset($_GET['amount']))
{
	echo "ERROR 001 : DATA_INCOMPLETE_ERROR. The required parameters are missing. Please refer documentation for more details. Please visit https://akshayanandraut.github.io/api-currency-converter";
}
else 
{
		$from = strtoupper($_GET['from']);
		$to = strtoupper($_GET['to']);
		$amount =strtoupper($_GET['amount']);
		$currency_array = array("AED","AFN","ALL","AMD","ANG","AOA","ARS","AUD","AWG","AZN","BAM","BBD","BDT","BGN","BHD","BIF","BMD","BND","BOB","BRL","BSD","BTC","BTN","BWP","BYN","BYR","BZD","CAD","CDF","CHF","CLF","CLP","CNH","CNY","COP","CRC","CUP","CVE","CZK","DEM","DJF","DKK","DOP","DZD","EGP","ERN","ETB","EUR","FIM","FJD","FKP","FRF","GBP","GEL","GHS","GIP","GMD","GNF","GTQ","GYD","HKD","HNL","HRK","HTG","HUF","IDR","IEP","ILS","INR","IQD","IRR","ISK","ITL","JMD","JOD","JPY","KES","KGS","KHR","KMF","KPW","KRW","KWD","KYD","KZT","LAK","LBP","LKR","LRD","LSL","LTL","LVL","LYD","MAD","MDL","MGA","MKD","MMK","MNT","MOP","MRO","MUR","MVR","MWK","MXN","MYR","MZN","NAD","NGN","NIO","NOK","NPR","NZD","OMR","PAB","PEN","PGK","PHP","PKG","PKR","PLN","PYG","QAR","RON","RSD","RUB","RWF","SAR","SBD","SCR","SDG","SEK","SGD","SHP","SKK","SLL","SOS","SRD","STD","SVC","SYP","SZL","THB","TJS","TMT","TND","TOP","TRY","TTD","TWD","TZS","UAH","UGX","USD","UYU","UZS","VEF","VND","VUV","WST","XAF","XCD","XDR","XOF","XPF","YER","ZAR","ZMK","ZMW","ZWL");
		$currency_full_forms = array("United Arab Emirates Dirham (AED)","Afghan Afghani (AFN)","Albanian Lek (ALL)","Armenian Dram (AMD)","Netherlands Antillean Guilder (ANG)","Angolan Kwanza (AOA)","Argentine Peso (ARS)","Australian Dollar (A$)","Aruban Florin (AWG)","Azerbaijani Manat (AZN)","Bosnia-Herzegovina Convertible Mark (BAM)","Barbadian Dollar (BBD)","Bangladeshi Taka (BDT)","Bulgarian Lev (BGN)","Bahraini Dinar (BHD)","Burundian Franc (BIF)","Bermudan Dollar (BMD)","Brunei Dollar (BND)","Bolivian Boliviano (BOB)","Brazilian Real (R$)","Bahamian Dollar (BSD)","Bitcoin (฿)","Bhutanese Ngultrum (BTN)","Botswanan Pula (BWP)","Belarusian Ruble (BYN)","Belarusian Ruble (2000-2016) (BYR)","Belize Dollar (BZD)","Canadian Dollar (CA$)","Congolese Franc (CDF)","Swiss Franc (CHF)","Chilean Unit of Account (UF) (CLF)","Chilean Peso (CLP)","CNH (CNH)","Chinese Yuan (CN¥)","Colombian Peso (COP)","Costa Rican Colón (CRC)","Cuban Peso (CUP)","Cape Verdean Escudo (CVE)","Czech Republic Koruna (CZK)","German Mark (DEM)","Djiboutian Franc (DJF)","Danish Krone (DKK)","Dominican Peso (DOP)","Algerian Dinar (DZD)","Egyptian Pound (EGP)","Eritrean Nakfa (ERN)","Ethiopian Birr (ETB)","Euro (€)","Finnish Markka (FIM)","Fijian Dollar (FJD)","Falkland Islands Pound (FKP)","French Franc (FRF)","British Pound (£)","Georgian Lari (GEL)","Ghanaian Cedi (GHS)","Gibraltar Pound (GIP)","Gambian Dalasi (GMD)","Guinean Franc (GNF)","Guatemalan Quetzal (GTQ)","Guyanaese Dollar (GYD)","Hong Kong Dollar (HK$)","Honduran Lempira (HNL)","Croatian Kuna (HRK)","Haitian Gourde (HTG)","Hungarian Forint (HUF)","Indonesian Rupiah (IDR)","Irish Pound (IEP)","Israeli New Sheqel (₪)","Indian Rupee (₹)","Iraqi Dinar (IQD)","Iranian Rial (IRR)","Icelandic Króna (ISK)","Italian Lira (ITL)","Jamaican Dollar (JMD)","Jordanian Dinar (JOD)","Japanese Yen (¥)","Kenyan Shilling (KES)","Kyrgystani Som (KGS)","Cambodian Riel (KHR)","Comorian Franc (KMF)","North Korean Won (KPW)","South Korean Won (₩)","Kuwaiti Dinar (KWD)","Cayman Islands Dollar (KYD)","Kazakhstani Tenge (KZT)","Laotian Kip (LAK)","Lebanese Pound (LBP)","Sri Lankan Rupee (LKR)","Liberian Dollar (LRD)","Lesotho Loti (LSL)","Lithuanian Litas (LTL)","Latvian Lats (LVL)","Libyan Dinar (LYD)","Moroccan Dirham (MAD)","Moldovan Leu (MDL)","Malagasy Ariary (MGA)","Macedonian Denar (MKD)","Myanmar Kyat (MMK)","Mongolian Tugrik (MNT)","Macanese Pataca (MOP)","Mauritanian Ouguiya (MRO)","Mauritian Rupee (MUR)","Maldivian Rufiyaa (MVR)","Malawian Kwacha (MWK)","Mexican Peso (MX$)","Malaysian Ringgit (MYR)","Mozambican Metical (MZN)","Namibian Dollar (NAD)","Nigerian Naira (NGN)","Nicaraguan Córdoba (NIO)","Norwegian Krone (NOK)","Nepalese Rupee (NPR)","New Zealand Dollar (NZ$)","Omani Rial (OMR)","Panamanian Balboa (PAB)","Peruvian Nuevo Sol (PEN)","Papua New Guinean Kina (PGK)","Philippine Peso (PHP)","PKG (PKG)","Pakistani Rupee (PKR)","Polish Zloty (PLN)","Paraguayan Guarani (PYG)","Qatari Rial (QAR)","Romanian Leu (RON)","Serbian Dinar (RSD)","Russian Ruble (RUB)","Rwandan Franc (RWF)","Saudi Riyal (SAR)","Solomon Islands Dollar (SBD)","Seychellois Rupee (SCR)","Sudanese Pound (SDG)","Swedish Krona (SEK)","Singapore Dollar (SGD)","St. Helena Pound (SHP)","Slovak Koruna (SKK)","Sierra Leonean Leone (SLL)","Somali Shilling (SOS)","Surinamese Dollar (SRD)","São Tomé & Príncipe Dobra (STD)","Salvadoran Colón (SVC)","Syrian Pound (SYP)","Swazi Lilangeni (SZL)","Thai Baht (THB)","Tajikistani Somoni (TJS)","Turkmenistani Manat (TMT)","Tunisian Dinar (TND)","Tongan Paʻanga (TOP)","Turkish Lira (TRY)","Trinidad & Tobago Dollar (TTD)","New Taiwan Dollar (NT$)","Tanzanian Shilling (TZS)","Ukrainian Hryvnia (UAH)","Ugandan Shilling (UGX)","US Dollar ($)","Uruguayan Peso (UYU)","Uzbekistani Som (UZS)","Venezuelan Bolívar (VEF)","Vietnamese Dong (₫)","Vanuatu Vatu (VUV)","Samoan Tala (WST)","Central African CFA Franc (FCFA)","East Caribbean Dollar (EC$)","Special Drawing Rights (XDR)","West African CFA Franc (CFA)","CFP Franc (CFPF)","Yemeni Rial (YER)","South African Rand (ZAR)","Zambian Kwacha (1968–2012) (ZMK)","Zambian Kwacha (ZMW)","Zimbabwean Dollar (2009) (ZWL)");
		
		if($from == $to)
		{
			echo "ERROR 002 : INVALID_CONVERSION_ERROR. Please check the conversion types. Conversion types cannot be same. Please visit https://akshayanandraut.github.io/api-currency-converter";
		}
		else if( !in_array($from,$currency_array) )
		{
			echo "ERROR 003 : INVALID_FROM_VALUE_ERROR. Please check the from value.Please refer documentation and currency codes for more details. Please visit https://akshayanandraut.github.io/api-currency-converter";
		}
		else if( !in_array($to,$currency_array) )
		{
			echo "ERROR 004 : INVALID_TO_VALUE_ERROR. Please check the to value. Please refer  documentation and currency codes for more details. Please visit https://akshayanandraut.github.io/api-currency-converter";
		}
		else if(is_nan($amount))
		{
			echo "ERROR 005 : INVALID_AMOUNT_ERROR. Please check the amount. Please refer  documentation for more details. Please visit https://akshayanandraut.github.io/api-currency-converter";
		}
		else
		{
			header('Content-type: text/plain');
			$resp = file_get_contents('https://www.google.com/finance/converter?a='.$amount.'&from='.$from.'&to='.$to.'');
			
			if(substr($resp,strripos($resp,'currency_converter_result')+27,17) == "Could not convert")
			{
				echo "ERROR 006 : COULD_NOT_CONVERT. Please refer  documentation for more details. Please visit https://akshayanandraut.github.io/api-currency-converter";
				
			}
			else 			
			{
				$start_at = strripos($resp,'bld')+4;
				$till = (strripos($resp,'submit')-24)-$start_at;
				$value = substr($resp,$start_at,$till);
				$index = array_search($from,$currency_array);
				$from_full_currency = $currency_full_forms[$index];
				$index = array_search($to,$currency_array);
				$to_full_currency = $currency_full_forms[$index];
				
				if(strtoupper($_GET['format']) == "XML")
				{	
					$output = '<?xml version="1.0"?><data><item><from>'.$from.'</from><from_currency>'.$from_full_currency.'</from_currency><to>'.$to.'</to><to_currency>'.$to_full_currency.'</to_currency><amount>'.$amount.'</amount><response>'.$value.'</response></item></data>';
				}
				else if(strtoupper($_GET['format']) == "DIRECT")
				{	
					$output =	$value;
				}
				else
				{
					$output =  '{"data":[{"from":"'.$from.'","from_currency":"'.$from_full_currency.'","to":"'.$to.'","to_currency":"'.$to_full_currency.'","amount":"'.$amount.'","response":"'.$value.'"}]}';
				}
					
				echo $output;
			}	
			
		}
}
?>
