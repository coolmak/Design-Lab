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
		<center><h2>PG Details</h2></center>
		<form name="pgdetail" method="post" action="" >
		<p class="none">
				
				<table>
					<?php
					session_start();
					require_once 'dbConnect.php'; 
					$db = new dbConnect();
					$dd_res=mysql_query("Select * from pginfo where pgname='".$_GET["pgname"]."' ") or die(mysql_error());
					$row=mysql_fetch_array($dd_res, MYSQL_ASSOC);
					$_SESSION['pgaddress']=$row["address"];
					echo"<tr>
						<td><b>PG Name</b></td>
						<td>".$row["pgname"]."</td>
					</tr>";
					echo"<tr>
						<td><b>Address</b></td>
						<td>".$row["address"]."</td>
					</tr>";
					echo"<tr>
						<td><b>Contact No.</b></td>
						<td>".$row["contactno"]."</td>
					</tr>";
					echo"<tr>
						<td><b>Rent</b></td>
						<td>".$row["rent"]."</td>
					</tr>";
					echo"<tr>
						<td><b> AC/Non-AC</b></td>
						<td>".$row["air"]."</td>
					</tr>";
					echo "<tr>
						<td><b> Description</b></td>
						<td>".$row["description"]."</td>
					</tr>";
					
					?>
					<tr>
						<td>&nbsp;</td>
						<td><input type="Button" value="Locate" name="submit" onclick="msg()" /></td>
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
