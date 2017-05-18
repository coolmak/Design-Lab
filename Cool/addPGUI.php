<?php  
    include_once('UpdatePGMgr.php');  
       
    $funObj = new UpdatePGMgr();  
	
	if(isset($_POST['submit'])) { 
		
        $pgname = $_POST['pgname']; 
		$pghouseno= $_POST['pghouseno'];
        $street = $_POST['street']; 
		$landmark = $_POST['landmark']; 
		$city= $_POST['city'];
        $pincode = $_POST['pincode']; 
		$address = $pghouseno . "," . $street . "," . $landmark . "," . $city . "," . $pincode;
		$contact = $_POST['contact']; 
		$rent= $_POST['rent'];
        $gender = $_POST['gender'];
		$air = $_POST['air']; 
		$description= $_POST['description'];
		
            $user = $funObj->addPgInfo($pgname , $pghouseno, $street, $landmark, $city, $pincode,$address, $contact, $rent, $gender, $air, $description);  
            if($user){  
                    echo "<script>alert('Details Updated')</script>";  
        } else {  
            echo "<script>alert('Details not Updated')</script>";  
          
        }  
    }  
?><html>
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
			#navcontainer ul
			{
			margin: 1px;
			padding: 0;
			list-style-type: none;
			text-align: center;
			}
			
			#navcontainer ul li{
				float: initial;
			}
			#navcontainer ul li { display: inline; }

			#navcontainer ul li a{
				text-decoration: none;
				background-color: #036;
				display: block;
				color: #fff;
				text-align: center;
				padding: 16px;
			}

			#navcontainer ul li a:hover{
			color: #fff;
			background-color: #369;
			}
			p.none{
				background-color:#FFFFE0;
				margin:0 auto;
				width:600px;
				height:625px;
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
	<div id="navcontainer">
		<ul >
					<div style="position:absolute;top:140px;left:422px;width:250px;">
		<li ]><a href="addPGUI.php">Add PG</a></li></div>
		<div style="position:absolute;top:140px;left:674px;width:250px;">
		<li><a href="updatePGUI.php">Update PG</a></li></div>
		<div style="position:absolute;top:121px;left:1258px;width:100px;">
		<li><a href="loginUI.php">Logout</a></li></div>


</ul></div>
<form name="addPG" method="post" action="" >
		
			<p class="none" style="position: absolute;top:250px; left:374px; ">
			
				<table cellpadding="12" class="tab1">
					
					<tr>
						<td><b>PG Name</b></td>
						<td><input type="text" style="height:23px; width:400px;" name="pgname" placeholder="enter pg name"/></td>
					</tr>
					<tr>
						<td><b>House No./Building</b></td>
						<td><input type="text" style="height:23px; width:400px;"name="pghouseno" placeholder="enter House No./Building "></input></td>
					</tr>
					<tr>
						<td><b>Street</b></td>
						<td><input type="text" style="height:23px; width:400px;" name="street" placeholder="enter street name"></input></td>
					</tr>
					<tr>
						<td><b>Landmark</b></td>
						<td><input type="text" style="height:23px; width:400px;" name="landmark" placeholder="enter landmark"></input></td>
					</tr>
					<tr>
						<td><b>City</b></td>
						<td><input type="text" style="height:23px; width:400px;" name="city" placeholder="enter city"></input></td>
					</tr>
					<tr>
						<td><b>PinCode</b></td>
						<td><input type="text" style="height:23px; width:400px;" name="pincode" placeholder="enter pincode"></input></td>
					</tr>
					<tr>
						<td><b>Contact No.</b></td>
						<td><input type="text" style="height:23px; width:400px;" name="contact" placeholder="enter contact no."></input></td>
					</tr>
					<tr>
						<td><b>Rent</b></td>
						<td><input type="text" style="height:23px; width:400px;" name="rent" placeholder="enter rent"></input></td>
					</tr>
					<tr>
						<td></td>
						<td>
						<input type="radio" name="gender" id="male" value="Male" " checked />Male 
						<input type="radio" name ="gender" id="female" value="Female" ;/>Female &nbsp;&nbsp;
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
						<input type="radio" name="air" id="ac" value="AC"  checked />AC 
						<input type="radio" name ="air" id="nonac"value="Non-AC"/>Non-AC &nbsp;&nbsp;
						</td>
					</tr>
					<tr>
						<td><b>Description</b></td>
						<td><textarea type="text" style="height:80px; width:400px;" name="description" placeholder="enter pg description"></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="ADD" name="submit" /></td>
					</tr>
					
				</table>
				
			</p>		
		</form>

</body>
</html>