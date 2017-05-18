<?php  
require_once 'dbConnect.php';    
    class UpdateCollegeMgr {  
            
        function __construct() {  
              
            // connecting to database  
            $db = new dbConnect();  
               
        }  
        // destructor  
        function __destruct() {  
              
        }  
        public function addCollegeInfo($collegename, $address,$description){  
                $qr = mysql_query("INSERT INTO collegeinfo(collegename,address,description) values('".$collegename."','".$address."','".$description."')") or die(mysql_error());  
                return $qr;  
               
        }  
        public function updateCollegeInfo($collegename, $address,$description){  
                $qr = mysql_query("UPDATE collegeinfo SET address='".$address."',description='".$description."' WHERE collegename='".$collegename."'") or die(mysql_error());  
                return $qr;  
               
        }  
          
          
    }  
?>  