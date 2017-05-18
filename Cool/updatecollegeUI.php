<?php  
    include_once('UpdateCollegeMgr.php');  
       
    $funObj = new UpdateCollegeMgr();  
	if(isset($_POST['submit'])) {  
        $collegename = $_POST['collegename']; 
		$address= $_POST['coll_address'];
        $description = $_POST['description'];  
            $user = $funObj->updateCollegeInfo($collegename,$address,$description);  
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
			h2{
				 color:white;
				 background-color:#D3D3D3;
				 paddin:20px;
				 border-style:solid;
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
					<div style="position:absolute;top:140px;left:422px;width:250px;">
		<li ]><a href="addcollegeUI.php">Add College</a></li></div>
		<div style="position:absolute;top:140px;left:674px;width:250px;">
		<li><a href="updatecollegeUI.php">Update College</a></li></div>
		<div style="position:absolute;top:121px;left:1258px;width:100px;">
		<li><a href="loginUI.php">Logout</a></li></div>

</ul></div>
	
	
		<form name="updatecollege" method="post" action="" >
		<p class="none"  style="position: absolute;top:250px; left:374px;">
			
				<table cellpadding="12" class="tab1">
					
					<tr>
						<td><b>College Name</b></td>
						<td>
							<select name="collegename"> 
							   <option value=""> -----------ALL----------- </option> 
								<?php
								require_once 'dbConnect.php'; 
								$db = new dbConnect();
								 $dd_res=mysql_query("Select collegename from collegeinfo");
								 while($r=mysql_fetch_row($dd_res)){ 
									   echo "<option value='$r[0]'> $r[0] </option>";
								 }
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td><b>Address</b></td>
						<td><textarea type="text" style="height:60px; width:300px;"name="coll_address" placeholder="enter college address "></textarea></td>
					</tr>
					<tr>
						<td><b>Description</b></td>
						<td><textarea type="text" style="height:120px; width:400px;" name="description" placeholder="enter college description"></textarea></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" value="Submit" name="submit" /></td>
					</tr>
					
				</table>
		</p>
				
 	</form>
</body>
</html>