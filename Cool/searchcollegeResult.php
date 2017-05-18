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
	
		</style>
	</head>
	<body bgcolor="#F7F9F9">
		<header><h1><center><label>WBJEE Admission & Accommodation</label></center></h1></header>
		<h2><center><label>Opening & Closing Rank</label></center></h2>
		<table>
		<thead>
		<tr>
					<th>InstituteName</th> <th>BranchName</th> <th>OPOpen</th>
					<th>OPClose</th> <th>OPPHOpen</th> <th>OPPHClose</th>
					<th>SCOpen</th>  <th>SCClose</th> <th>SCPHOpen</th>
					<th>SCPHClose</th> <th>STOpen</th> <th>STClose</th>
					<th>STPHOpen</th> <th>STPHClose</th> <th>BAOpen</th>
					<th>BAClose</th> <th>BAPHOpen</th> <th>BAPHClose</th>
					<th>BBOpen</th> <th>BBClose</th> <th>BBPHOpen</th>
					<th>BBPHClose</th> <th>TFWOpen</th> <th>TFWClose</th>
		</tr></thead>
		<tbody>
		<?php  
			include_once('SearchMgr.php');  
			   
			$funObj = new SearchMgr();  
			
			if(isset($_POST['submit'])) { 
				$stream = $_POST['stream']; 
				$round= $_POST['round'];
				
				$qr=$funObj->searchCollegeInfo($stream,$round);
				If (mysql_num_rows($qr) > 0) {
					
					while($row = mysql_fetch_array($qr, MYSQL_ASSOC)) {
						echo "<tr>
							<td>" . $row["InstituteName"]. "</td><td>" . $row["BranchName"]. "</td><td>" . $row["OPOpen"]. "</td>
							<td>" . $row["OPClose"]. "</td><td>" . $row["OPPHOpen"]. "</td><td>" . $row["OPPHClose"]. "</td>
							<td>" . $row["SCOpen"]. "</td><td>" . $row["SCClose"]. "</td><td>" . $row["SCPHOpen"]. "</td>
							<td>" . $row["SCPHClose"]. "</td><td>" . $row["STOpen"]. "</td><td>" . $row["STClose"]. "</td>
							<td>" . $row["STPHOpen"]. "</td><td>" . $row["STPHClose"]. "</td><td>" . $row["BAOpen"]. "</td>
							<td>" . $row["BAClose"]. "</td><td>" . $row["BAPHOpen"]. "</td><td>" . $row["BAPHClose"]. "</td>
							<td>" . $row["BBOpen"]. "</td><td>" . $row["BBClose"]. "</td><td>" . $row["BBPHOpen"]. "</td>
							<td>" . $row["BBPHClose"]. "</td><td>" . $row["TFWOpen"]. "</td><td>" . $row["TFWClose"]. "</td>
						</tr>";
					}
					
				} 
				else{
					echo "0 results";
				}		
			}  		
		?>
		</tbody>
		<tfoot>
		<tr>
					<th>InstituteName</th> <th>BranchName</th> <th>OPOpen</th>
					<th>OPClose</th> <th>OPPHOpen</th> <th>OPPHClose</th>
					<th>SCOpen</th>  <th>SCClose</th> <th>SCPHOpen</th>
					<th>SCPHClose</th> <th>STOpen</th> <th>STClose</th>
					<th>STPHOpen</th> <th>STPHClose</th> <th>BAOpen</th>
					<th>BAClose</th> <th>BAPHOpen</th> <th>BAPHClose</th>
					<th>BBOpen</th> <th>BBClose</th> <th>BBPHOpen</th>
					<th>BBPHClose</th> <th>TFWOpen</th> <th>TFWClose</th>
		</tr></tfoot>
	</table>
	</body>
</html>
