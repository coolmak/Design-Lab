<?php  
require_once 'dbConnect.php';  
session_start();  
    class SearchMgr {  
            
        function __construct() {  
              
            // connecting to database  
            $db = new dbConnect();  
               
        }  
        // destructor  
        function __destruct() {  
              
        }  
        public function searchCollegeInfo($stream, $round){  
				if($round==1)
					$qr = mysql_query("select * from round1 where BranchName='".$stream."' ORDER by OPOpen asc") or die(mysql_error()); 
				else if($round==2)
					$qr = mysql_query("select * from round2 where BranchName='".$stream."' ORDER by OPOpen asc") or die(mysql_error()); 
				else
					$qr = mysql_query("select * from round3 where BranchName='".$stream."' ORDER by OPOpen asc") or die(mysql_error()); 
				return $qr;
		}
        public function getCollegeAddress($collegename){
			$qr1 = mysql_query("select address from collegeinfo where collegename='".$collegename."' ") or die(mysql_error()); 
			return $qr1;
		}
        public function searchPgInfo($gender){
			$qr2 = mysql_query("select * from pginfo where gender='".$gender."' ") or die(mysql_error()); 
			return $qr2;
		}
		Public function getDistance($addressFrom, $addressTo){
			
			//Change address format
			$formattedAddrFrom = str_replace(' ','+',$addressFrom);
			$formattedAddrTo = str_replace(' ','+',$addressTo);
			
			//echo $formattedAddrFrom;
			//echo '<br>'.$formattedAddrTo;
			//Send request and receive json data
			//$geocodeFrom = file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$formattedAddrFrom.'&sensor=false&key=AIzaSyCKgyhJyqbD3yUSRq3UqLY6jGyRXccuC6g');
			//$outputFrom = json_decode($geocodeFrom);
	
			//$geocodeTo = file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$formattedAddrTo.'&sensor=false&key=AIzaSyCKgyhJyqbD3yUSRq3UqLY6jGyRXccuC6g');
			//$outputTo = json_decode($geocodeTo);
			
			$geocodeFrom ="https://maps.google.com/maps/api/geocode/json?address='.$formattedAddrFrom.'&sensor=false&region=India&key=AIzaSyCKgyhJyqbD3yUSRq3UqLY6jGyRXccuC6g";
			$ch = curl_init($geocodeFrom);
			curl_setopt($ch, CURLOPT_URL, $geocodeFrom);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			$response = curl_exec($ch);
			curl_close($ch);
			$response_a = json_decode($response);
			//echo $latitudeFrom  = $response_a->results[0]->geometry->location->lat;
			//echo "<br />";
			//echo $longitudeFrom = $response_a->results[0]->geometry->location->lng;
			//echo "<br/>";
			$latitudeFrom  = $response_a->results[0]->geometry->location->lat;
			$longitudeFrom = $response_a->results[0]->geometry->location->lng;
			
			
			$geocodeTo = "https://maps.google.com/maps/api/geocode/json?address='.$formattedAddrTo.'&sensor=false&region=India&key=AIzaSyCKgyhJyqbD3yUSRq3UqLY6jGyRXccuC6g";
			$ch1 = curl_init($geocodeTo);
			curl_setopt($ch1, CURLOPT_URL, $geocodeTo);
			curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch1, CURLOPT_PROXYPORT, 3128);
			curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, 0);
			$response1 = curl_exec($ch1);
			curl_close($ch1);
			$response_b = json_decode($response1);
			//echo $latitudeTo = $response_b->results[0]->geometry->location->lat;
			//echo "<br/>";
			//echo $longitudeTo = $response_b->results[0]->geometry->location->lng;
			$latitudeTo = $response_b->results[0]->geometry->location->lat;
			$longitudeTo = $response_b->results[0]->geometry->location->lng;
			
			
			//Get latitude and longitude from geo data
			//$latitudeFrom = $outputFrom->results[0]->geometry->location->lat;
			//$longitudeFrom = $outputFrom->results[0]->geometry->location->lng;
			//$latitudeTo = $outputTo->results[0]->geometry->location->lat;
			//$longitudeTo = $outputTo->results[0]->geometry->location->lng;
			
			//Calculate distance from latitude and longitude
			$theta = $longitudeFrom - $longitudeTo;
			$dist = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
			//echo $dist;
			$dist = acos($dist);
			$dist = rad2deg($dist);
			$miles = $dist * 60 * 1.1515;
			
			return ($miles * 1.609344);
			
		}

    }  
?>  