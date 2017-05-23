<?php  
	session_start();
	require_once 'dbConnect.php';  
    
	$db = new dbConnect();  
        
		$addressFrom=$_SESSION['collegeaddress'];
		echo $addressFrom;
		$addressTo=$_SESSION['pgaddress'];
		//$qr=mysql_query("select address from pginfo where pgname='".$pgname."' ") or die(mysql_error());
		//$addressTo=mysql_fetch_array($qr);
		echo "<br>".$addressTo;
			
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
			
			/*$geocodeFrom ="https://maps.google.com/maps/api/geocode/json?address='.$formattedAddrFrom.'&sensor=false&region=India&key=AIzaSyCKgyhJyqbD3yUSRq3UqLY6jGyRXccuC6g";
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
			
		}*/

     
?>  <html>
	<head>
		<style type="text/css">
			header, footer {
				padding: 1ex;
				color: white;
				background-color: #7B241C  ;
				clear: left;
				text-align: center;
			}
			h1{
				 background-color:blue;
				 padding:5px 10px 5px 10px;
				 border-top-color:green;
				 border-top-style:solid;
				 border-top-width:4px;
				 border-bottom-color:green;
				 border-bottom-style:solid;
				 border-bottom-width:4px;
			}
			h2{
				 color:white;
				 background-color:#D3D3D3;
				 paddin:20px;
				 border-style:solid;
			}
			p.none{
				background-color:#FFFFE0;
				margin:0 auto;
				width:500px;
				border-color:white;
				border-style:solid;
			}
	   
		    b{
		        color:blue;
		    }
			#map {
				height: 450px;
				width: 100%;
		    }
		</style>
	</head>
	
	<body bgcolor="#F7F9F9">
		<header><h1><center><label>WBJEE Admission & Accommodation</label></center></h1></header>
		<center><h2>Map</h2></center>
		<div id="map"></div>
		<script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKgyhJyqbD3yUSRq3UqLY6jGyRXccuC6g&callback=initMap">
    </script>
	</body>
</html>
