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
			}h2{
				 color:white;
				 background-color:#D3D3D3;
				 paddin:20px;
				 border-style:solid;
			}
			p.none{
				background-color:#FFFFE0;
				margin:0 auto;
				width:500px;
				height:300px;
				border-color:white;
				border-style:solid;
			}
	   
		    b{
		        color:blue;
		    }
			input[type=button] {
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
		</style>
	</head>
	
	<body bgcolor="#F7F9F9">
	<script>
			function callhome(){
				window.open("index.php","_self");
			}
			
		</script>

		<header><h1><center><label>WBJEE Admission & Accommodation</label></center></h1></header>
		<div style="position:absolute;top:38px;left:50px;width:38px;height:38px">
			<input type="image" src="home.png" alt="home" width="37" height="37" id ="home" onclick="callhome()" ></div>
		
		<center><h2>PG Details</h2></center>
		<form name="pgdetail" method="post" action="" >
		<p class="none">
				
				<table cellspacing="12">
					<?php
					session_start();
					require_once 'dbConnect.php'; 
					$db = new dbConnect();
					$dd_res=mysql_query("Select * from pginfo where pgname='".$_GET["pgname"]."' ") or die(mysql_error());
					$row=mysql_fetch_array($dd_res, MYSQL_ASSOC);
					$_SESSION['pgaddress']=$row["address"];
					echo"<tr>
						<td width=30%><b>PG Name</b></td>
						<td></td>
						<td>".$row["pgname"]."</td>
					</tr>";
					echo"<tr>
						<td><b>Address</b></td><td></td>
						<td >".$row["address"]."</td>
					</tr>";
					echo"<tr>
						<td><b>Contact No.</b></td><td></td>
						<td>".$row["contactno"]."</td>
					</tr>";
					echo"<tr>
						<td><b>Rent</b></td><td></td>
						<td>".$row["rent"]."</td>
					</tr>";
					echo"<tr>
						<td><b> AC/Non-AC</b></td><td></td>
						<td>".$row["air"]."</td>
					</tr>";
					echo "<tr>
						<td><b> Description</b></td><td></td>
						<td>".$row["description"]."</td>
					</tr>";
					
					?>
					<tr></tr><tr></tr
					<tr>
						<td></td>
						<td><input type="button" value="Locate" name="submit" onclick="msg();" /></td>
					</tr>
				</table>
		</p>
				
 	</form>
	<script>
function msg() {
    window.open("Maps.php","_self");
}
</script>
	</body>
</html>
