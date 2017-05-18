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
			table, th, td {
				border: 1px solid black;
			}
			p.none{
				margin:0 auto;
				width:1366px;
				border-style:solid;
				overflow:scroll;
			}
			div.tbody{
				width:100%;
				overflow:scroll;
			}
			.table-tr :hover {
    background-color: white;
	td a { 
   display: block; 
   border: 1px solid black;
   padding: 16px; 
}
}
	
		</style>
	</head>
	<body bgcolor="#F7F9F9">
		<header><h1><center><label>WBJEE Admission & Accommodation</label></center></h1></header>
		<h2><center><label>List of Available Paying Guest</label></center></h2>
		<table>
		<thead>
		<tr>
					<th>PG Name</th> <th>Address</th> <th>Contact No.</th>
					<th>Rent</th> <th>AC/Non-AC</th> <th>Description</th>
					<th>Distance</th>
		</tr></thead>
		<tbody>
		<?php  
			include_once('SearchMgr.php');  
			   
			$funObj = new SearchMgr();  
			
			if(isset($_POST['submit'])) { 
				$collegename = $_POST['college']; 
				$gender= $_POST['gender'];
				
				$qr1= $funObj->getCollegeAddress($collegename);
				$result=mysql_fetch_array($qr1, MYSQL_ASSOC);
				$collegeaddress=$result["address"];
				
				$qr=$funObj->searchPgInfo($gender);
				If (mysql_num_rows($qr) > 0) {
					
					while($row = mysql_fetch_array($qr, MYSQL_ASSOC)) {
						$distance= $funObj->getDistance($collegeaddress,$row["address"]);
						?>
						<tr class="table-tr"> 

							<td><a href="https://www.google.com"><?php echo $row["pgname"];?></a> </td>				
							<td><a href="https://www.google.com"><?php echo $row["address"];?></a> </td>
							<td><a href="https://www.google.com"><?php echo $row["contactno"];?></a> </td>
							<td><a href="https://www.google.com"><?php echo $row["rent"];?></a> </td>
							<td><a href="https://www.google.com"><?php echo $row["air"];?></a> </td>
							<td><a href="https://www.google.com"><?php echo $row["description"];?></a> </td>
							<td><a href="https://www.google.com"><?php echo $distance;?></a> </td>
						</tr>
					<?php
					}
					
				} 
				else{
					echo "0 results";
				}		
			}  		
		?>
		</tbody>
	</table>
	</body>
</html>
