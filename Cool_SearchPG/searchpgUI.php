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
				 background-color:#D3D3D3;
				 padding:5px 10px 5px 10px;
				 border-top-width:4px;
				 }
			label{	
				color:white;
			}
			 p.sea{
				background-color:#FFFFE0;
				margin:0 auto;
				width:700px;
				border-color:white;
				border-style:solid;
			}
		</style>
	</head>
<body bgcolor="#F7F9F9">
	<header><h1><center><label>WBJEE Admission & Accommodation</label></center></h1></header>
	<h2><center><label>Paying Guest</label></center></h2>
	<center>
	<form name="searchpgform" method="post" action="searchpgResult.php" >
		<p class="sea">
		<table>
			<tr>
			&nbsp;&nbsp;
				<td>
					Nearby College:  	<select name="college" style="width:400px"> 
									    
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
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
			
				<td>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" name="gender" id="male" value="Male" " checked />Male 
					<input type="radio" name ="gender" id="female" value="Female" ;/>Female &nbsp;&nbsp;
				</td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" value="SEARCH" name="submit">
				</td>
			</tr>
			
		</table>
		</p>
		</form>
		</center>
</body>
</html>