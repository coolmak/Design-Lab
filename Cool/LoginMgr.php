<?php  
require_once 'dbConnect.php';  
session_start();  
    class LoginMgr {  
            
        function __construct() {  
              
            // connecting to database  
            $db = new dbConnect();  
               
        }  
        // destructor  
        function __destruct() {  
              
        }  
		
        public function verifyLogin($emailid, $password,$status){  
			if($status==="Pgowner"){
            $res = mysql_query("SELECT * FROM  pgownerlogin WHERE email= '".$emailid."' AND password = '".$password."'");  
            $user_data = mysql_fetch_array($res);  
            //print_r($user_data);  
            $no_rows = mysql_num_rows($res);  
              
            if ($no_rows == 1)   
            {  
				
                $_SESSION['login'] = true;   
                $_SESSION['email'] = $user_data['email'];  
                return TRUE; 
            }  
            else  
            {  
                return FALSE;  
            }  
           }
		else{
			$res = mysql_query("SELECT * FROM  adminlogin WHERE email = '".$emailid."' AND password = '".$password."'");  
					$user_data = mysql_fetch_array($res);  
					//print_r($user_data);  
					$no_rows = mysql_num_rows($res);  
					  
					if ($no_rows == 1)   
					{  
						
						$_SESSION['login'] = true;  
						$_SESSION['email'] = $user_data['email'] ;  
						return TRUE;  
					}  
					else  
					{  
						return FALSE;  
					}  
			
		}			
                   
    }  
        
    }  
?>  