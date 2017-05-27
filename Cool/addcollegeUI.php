<?php  
    include_once('UpdateCollegeMgr.php');  
       
    $funObj = new UpdateCollegeMgr();  
	
	if(isset($_POST['submit'])) { 
		
        $collegename = $_POST['collegename']; 
		$address= $_POST['coll_address'];
        $description = $_POST['description'];  
            $user = $funObj->addCollegeInfo($collegename,$address,$description);  
            if($user){  
                    echo "<script>alert('Details Updated')</script>";  
        } else {  
            echo "<script>alert('Details not Updated')</script>";  
          
        }  
    }  
?>
<html>
	<head>
		<style type="text/css">
			header{
				padding: 0.8ex;
				color: white;
				background-color: #E74C3C  ;
				clear: left;
				text-align: center;
			}
			h1{
				 background-color:#E74C3C;
				 
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
				height:350px;
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
			<div style="position:absolute;top:130px;left:422px;width:250px;">
				<li ]><a href="addcollegeUI.php">Add College</a></li></div>
			<div style="position:absolute;top:130px;left:674px;width:250px;">
				<li><a href="updatecollegeUI.php">Update College</a></li></div>
			<div style="position:absolute;top:107px;left:1258px;width:100px;">
				<li><a href="loginUI.php">Logout</a></li></div>
		</ul>
	</div>
	
		<form name="addcollege" method="post" action="" >


		
			<p class="none" style="position: absolute;top:250px; left:374px; ">
			
				<table cellpadding="12" class="tab1">
					
					<tr>
						<td><b>College Name</b></td>
						<td><input type="text" style="height:23px; width:350px;" name="collegename" placeholder="enter college name"  required/></td>
					</tr>
					<tr>
						<td><b>Address</b></td>
						<td><textarea type="text" style="height:60px; width:300px;"name="coll_address" placeholder="enter college address "  required></textarea></td>
					</tr>
					<tr>
						<td><b>Description</b></td>
						<td><textarea type="text" style="height:120px; width:400px;" name="description" placeholder="enter college description" required></textarea></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" value="ADD" name="submit" /></td>
					</tr>
					
				</table>
				
			</p>		
		</form>
	
</body>
</html>