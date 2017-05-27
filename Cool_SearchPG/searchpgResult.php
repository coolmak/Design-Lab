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
			
			
			table, td, th {
				border: 1px solid black;
			}

			table {
				border-collapse: collapse;
				width: 50%;
			}

			th {
				height: 50px;
			}
			
			tr{
				height: 30px;
			}
			 td 
{
    text-align:center; 
    vertical-align:middle;
}
			p.none{
				margin:0 auto;
				width:600px;
				height:400px;
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
		<h2><center><label>List of Available Paying Guest</label></center></h2>
		<div style="position:absolute;top:38px;left:50px;width:38px;height:38px">
			<input type="image" src="home.png" alt="home" width="37" height="37" id ="home" onclick="callhome()" ></div>
		
		
		<table bgcolor="#FFFFE0"  align="center">
		
		<tr>
					<th>PG Name</th> 
					<th>Rent</th> 
					<th>Distance (km)</th>
		</tr>
		
		<?php  
			include_once('SearchMgr.php');  
			   
			$funObj = new SearchMgr();  
			
			if(isset($_POST['submit'])) { 
				$collegename = $_POST['college']; 
				$gender= $_POST['gender'];
				//echo $collegename;
				$qr1= $funObj->getCollegeAddress($collegename);
				$result=mysql_fetch_array($qr1, MYSQL_ASSOC);
				$collegeaddress=$result["address"];
				$_SESSION['collegeaddress']=$result["address"];
				//echo $collegeaddress;
				$qr=$funObj->searchPgInfo($gender);
				If (mysql_num_rows($qr) > 0) {
					
					while($row = mysql_fetch_array($qr, MYSQL_ASSOC)) {
						$distance= $funObj->getDistance($collegeaddress,$row["address"]);
						?>
						<tr > 

							<td><a href="pgdetail.php?pgname=<?php echo $row["pgname"];?>"><?php echo $row["pgname"];?> </a></td>				
							<td><?php echo $row["rent"];?></td>
							<td><?php echo number_format((float)$distance, 2, '.', '');?> </td>
						</tr>
					<?php
					}
					
				} 
				else{
					echo "0 results";
				}		
			}  		
		?>
		
	</table>
	
	</body>
</html>
