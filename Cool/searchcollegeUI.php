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
				width:500px;
				border-color:white;
				border-style:solid;
			}
		</style>
	</head>
<body bgcolor="#F7F9F9">
	<header><h1><center><label>WBJEE Admission & Accommodation</label></center></h1></header>
	<h2><center><label>Opening & Closing Rank</label></center></h2>
	<center>
	<form name="searchcollegeform" method="post" action="searchcollegeResult.php" >
		<p class="sea">
		<table>
			<tr>
				<td>
				Round:         <select name="round" id="reg" style="width:160px">
				<option value="1">1</option> 
				<option value="2">2</option> 
				<option value="3">3</option>
				</select>
				</td>
			</tr>
			<tr> </tr><tr></tr>
			<tr>
				<td>
				Stream:        <select name="stream" id="reg1" style="width:400px">
				<option value="Computer Science And Engineering/Computer Science And Technology">Computer Science And Engineering/Computer Science And Technology</option> 
				<option value="Electronics And Communication Engineering/Electronics And Telecommunication Engineering
				">Electronics And Communication Engineering/Electronics And Telecommunication Engineering</option> 
				<option value="Electrical Engineering">Electrical Engineering</option> 
				<option value="Mechanical Engineering">Mechanical Engineering</option> 
				<option value="Civil Engineering">Civil Engineering</option> 
				</select>
				</td>
			</tr>
			<tr> </tr><tr></tr>
			<tr>
				<td>
				<input type="submit" value="SEARCH" name="submit"/>
				</td>
			</tr>

		</table>
		</p>
		</form>
		</center>
</body>
</html>