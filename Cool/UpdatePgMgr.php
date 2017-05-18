<?php  
require_once 'dbConnect.php';    
    class UpdatePgMgr {  
            
        function __construct() {  
              
            // connecting to database  
            $db = new dbConnect();  
               
        }  
        // destructor  
        function __destruct() {  
              
        }  
        public function addPgInfo($pgname , $pghouseno, $street, $landmark, $city, $pincode,$address, $contact, $rent, $gender, $air, $description){  
                $qr = mysql_query("INSERT INTO pginfo(pgname, houseno, street, landmark, city, pincode,address, contactno, rent, gender, air, description) values
				('".$pgname."' , '".$pghouseno."', '".$street."', '".$landmark."', '".$city."', '".$pincode."',  '".$address."','".$contact."', '".$rent."', '".$gender."',
				'".$air."', '".$description."')") or die(mysql_error()); 
                return $qr;  
               
        }
		public function updatePgInfo($pgname , $pghouseno, $street, $landmark, $city, $pincode,$address, $contact, $rent, $gender, $air, $description){  
                $qr = mysql_query("INSERT INTO pginfo(pgname, houseno, street, landmark, city, pincode, contactno, rent, gender, air, description) values
				('".$pgname."' , '".$pghouseno."', '".$street."', '".$landmark."', '".$city."', '".$pincode."',  '".$address."', '".$contact."', '".$rent."', '".$gender."',
				'".$air."', '".$description."')") or die(mysql_error()); 
                return $qr;  
               
        }  		
          
    }  
?>  