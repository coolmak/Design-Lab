<?php
include_once('LoginMgr.php');
	 
	$funObj = new LoginMgr();
if(isset($_POST['submit'])) {
			if(isset($_POST['radio'])){
				if($_POST['radio']==="Pgowner"){
					$status=$_POST['radio'];
					$email = $_POST['email'];  
					$password = $_POST['password'];  
					$user = $funObj->verifyLogin($email, $password,$status);  
					if ($user) {  
						echo "<script>alert('Login success')</script>";  
					   header("location:PgOwnerUI.php");  
					} else {  
						// Registration Failed  
						echo "<script>alert('Emailid / Password Not Match')</script>";  
					} 
				}
				if($_POST['radio']==="Admin"){
					$status=$_POST['radio'];
					$email = $_POST['email'];  
					$password = $_POST['password'];  
					$user = $funObj->verifyLogin($email, $password,$status);  
					if ($user) {  
						// Registration Success  
						echo "<script>alert('Login success')</script>";
					   header("location:adminUI.php");  
					} else {  
						// Registration Failed  
						echo "<script>alert('Emailid / Password Not Match')</script>";  
					} 
				}
			}
		}
?>
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
	<script>
		
		
		function hide(){
			var x = document.getElementById('sign');
			
				x.style.display = 'none';
		}
		function show(){
			var x = document.getElementById('sign');
			x.style.display = 'block';
		}
		function signup(){
			
			open("signupUI.php");
		}
	</script>

	<header><h1><center><label>WBJEE Admission & Accommodation</label></center></h1></header>
	<center><h2>Log In / Sign Up</h2></center>
	
	<form name="loginform" method="post" action="" >
		<p class="none">
				<table cellpadding="12" class="tab1">
					<tr>
						<td>
						<input type="radio" name="radio" id="pg" value="Pgowner"  checked onclick="show()"/>Pg-Owner&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name ="radio" id="adm"value="Admin" onclick="hide()"/>Admin
						</td>
					</tr>
					<tr>
						<td><b>Email</b></td>
						<td><input type="email" name="email"  placeholder="enter the email-id"/></td>
					</tr>
					<tr>
						<td><b>Password</b></td>
						<td><input type="password" name="password"  placeholder="enter the password"/></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" value="Login" name="submit"/></td>
						<td><input type="button" value="Sign Up" name="button" id ="sign" onclick="signup()"/></td>
					</tr>
					</table>
					</p>
				
 	</form>
</body>
</html>
