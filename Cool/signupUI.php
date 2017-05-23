<?php  
    include_once('SignupMgr.php');  
       
    $funObj = new SignupMgr();  
	if(isset($_POST['submit'])) {  
        $name = $_POST['name']; 
		$contact_no = $_POST['pgcontact'];
        $email = $_POST['email'];  
        $password = $_POST['password'];  
        $confirmPassword = $_POST['confirm_password'];  
        if($password == $confirmPassword){ 
            $user = $funObj->isUserExist($email);  
            if(!$user){  
                $register = $funObj->signup($name,$contact_no, $email, $password);  
                if($register){    
					 header("location:PgOwnerUI.php");
                }else{  
                    echo "<script>alert('Registration Not Successful')</script>";  
                }  
            } else {  
                echo "<script>alert('Email Already Exist')</script>";  
            }  
        } else {  
            echo "<script>alert('Password Not Match')</script>";  
          
        }  
    }  
?> <html>
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
		</style>
	</head>
	
	<body bgcolor="#F7F9F9">
		<header><h1><center><label>WBJEE Admission & Accommodation</label></center></h1></header>
		<center><h2>Sign Up</h2></center>
		<form name="signupform" method="post" action="" >
		<p class="none">
			
				<table cellpadding="12" class="tab1">
					
					<tr>
						<td><b>Name</b></td>
						<td><input type="name" name="name" placeholder="enter your name"  required/></td>
					</tr>
					<tr>
						<td><b>Contact No</b></td>
						<td><input type="tel" name="pgcontact" placeholder="enter your contact no."  required/></td>
					</tr>
					<tr>
						<td><b>Email</b></td>
						<td><input type="email"  name="email" placeholder="enter the email-id"  required/></td>
					</tr>
					<tr>
						<td><b>Password</b></td>
						<td><input type="password" name="password" placeholder="enter the password"  required/></td>
					</tr>
					<tr>
						<td><b> Confirm Password</b></td>
						<td><input type="password" name="confirm_password" placeholder="re-enter the password"  required/></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" value="Create your Account" name="submit" /></td>
					</tr>
					
				</table>
		</p>
				
 	</form>
	</body>
</html>
