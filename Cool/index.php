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
			ul {
				list-style-type: none;
				margin: 1px;
				padding: 0;
				overflow: hidden;
				background-color: #333333;
			}
			li {
				float: left;
			}

			li a {
				display: block;
				color: white;
				text-align: center;
				padding: 16px;
				text-decoration: none;
			}

			li a:hover {
				background-color: #111111;
			}
			p1{
				 color:blue;
			}
			label{
				color:white;
			}
			<div id="about us">
			<div id="main">
			
		</style>
	</head>
	
	<body bgcolor="#F7F9F9">
		<script>
			function callpg(){
				window.open("searchpgUI.php","_self");
			}
			function callcollege()
			{
			window.open("searchcollegeUI.php","_self");
			}
		</script>

		<header><h1><center><label>WBJEE Admission & Accommodation</label></center></h1></header>
		<ul>
		  <li><a href="index.php">Home</a></li>
		  
		  <!--<li><a href="about.php">About us</a></li>--> 
		  <div style="position:absolute;top:121px;left:1225px">
		  <li><a href="loginUI.php">Log In/Sign Up</a></li></div>
		</ul>
		
		<div id="main" style="position:relative;top:80px;">
			<div style="position:absolute;top:0px;left:432px;width:250px;height:250px">
			<input type="image" src="college picture.jpg" alt="College" width="250" height="250" id ="clg" onclick="callcollege()" ></div>
			<div style="position:absolute;top:0px;left:684px;width:250px;height:250px">
			<input type="image" src="PG picture.jpg" alt="Paying Guest" width="250" height="250" id ="pg" onclick="callpg()" ></div>
			</div>
		
	</body>
</html>
