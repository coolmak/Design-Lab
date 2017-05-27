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
	<script>
			function callhome(){
				window.open("index.php","_self");
			}
	
		</script>

	<header><h1><center><label>WBJEE Admission & Accommodation</label></center></h1></header>
	<div style="position:absolute;top:38px;left:50px;width:38px;height:38px">
			<input type="image" src="home.png" alt="home" width="37" height="37" id ="home" onclick="callhome()" ></div>
	
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
				<option value="Agricultural Engineering">Agricultural Engineering</option> 
				<option value="Jute And Fibre Technology">Jute And Fibre Technology</option> 
				<option value="Architecture/Architectural Engineering">Architecture/Architectural Engineering</option> 
				<option value="Chemical Engineering">Chemical Engineering </option> 
				<option value="Construction Engineering">Construction Engineering</option> 
				<option value="Electronics And Instrumentation Engineering/Instrumentation And Electronics Engineering">Electronics And Instrumentation Engineering/Instrumentation And Electronics Engineering</option> 
				<option value="Food Engineering And Technology/Food Technology">Food Engineering And Technology/Food Technology</option> 
				<option value="Information Technology">Information Technology</option> 
				<option value="Instrumentation Engineering/Instrumentation And Electronics Engineering">Instrumentation Engineering/Instrumentation And Electronics Engineering</option> 
				<option value="Metallurgical Engineering">Metallurgical Engineering</option> 
				<option value="Pharmaceutical Technology/Pharmacy">Pharmaceutical Technology/Pharmacy</option> 
				<option value="Power Engineering/Power Plant Engineering">Power Engineering/Power Plant Engineering</option> 
				<option value="Printing Engineering/Printing Technology">Printing Engineering/Printing Technology</option>  
				<option value="Production Engineering">Production Engineering</option>  
				<option value="Applied Electronics And Instrumentation Engineering">Applied Electronics And Instrumentation Engineering</option>  
				
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