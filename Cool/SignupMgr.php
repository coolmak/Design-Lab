<?php  
require_once 'dbConnect.php';  
session_start();  
    class SignupMgr {  
            
        function __construct() {  
              
            // connecting to database  
            $db = new dbConnect();  
               
        }  
        // destructor  
        function __destruct() {  
              
        }  
        public function signup($name, $contact_no,$email, $password){  
                $qr = mysql_query("INSERT INTO pgownerlogin(name, email,contact,password) values('".$name."','".$email."','".$contact_no."','".$password."')") or die(mysql_error());  
                return $qr;  
               
        }  
          
        public function isUserExist($email){  
            $qr = mysql_query("SELECT * FROM pgownerlogin WHERE email = '".$emailid."'");  
             $row = mysql_num_rows($qr);  
            if($row > 0){  
                return true;  
            } else {  
                return false;  
            }  
        }  
    }  
?>  