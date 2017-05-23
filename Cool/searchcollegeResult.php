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
			table{
				width: 100%;
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
		<div style overflow: auto;">
		<table>
		<thead>
		<!--<tr>
					<th>InstituteName</th> <th>BranchName</th> <th>OPOpen</th>
					<th>OPClose</th> <th>OPPHOpen</th> <th>OPPHClose</th>
					<th>SCOpen</th>  <th>SCClose</th> <th>SCPHOpen</th>
					<th>SCPHClose</th> <th>STOpen</th> <th>STClose</th>
					<th>STPHOpen</th> <th>STPHClose</th> <th>BAOpen</th>
					<th>BAClose</th> <th>BAPHOpen</th> <th>BAPHClose</th>
					<th>BBOpen</th> <th>BBClose</th> <th>BBPHOpen</th>
					<th>BBPHClose</th> <th>TFWOpen</th> <th>TFWClose</th>
		</tr>
		-->
		<tr>
					<th>InstituteName</th> <th>BranchName</th> <th>OPOpen</th>
					<th>OPClose</th> 
					<th>SCOpen</th>  <th>SCClose</th>  <th>STOpen</th> <th>STClose</th>
					 <th>BAOpen</th>
					<th>BAClose</th> 
					<th>BBOpen</th> <th>BBClose</th> 
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
						?>
						<!--<tr>
							<td><?php echo $row["InstituteName"]?></td> <td><?php echo $row["BranchName"]?></td> <td><?php echo $row["OPOpen"]?></td>
							<td><?php echo $row["OPClose"]?></td> <td><?php echo $row["OPPHOpen"]?></td> <td><?php echo $row["OPPHClose"]?></td>
							<td><?php echo $row["SCOpen"]?></td> <td><?php echo $row["SCClose"]?></td> <td><?php echo $row["SCPHOpen"]?></td>
							<td><?php echo $row["SCPHClose"]?></td> <td><?php echo $row["STOpen"]?></td>  <td><?php echo  $row["STClose"]?></td>
							<td><?php echo $row["STPHOpen"]?></td> <td><?php echo $row["STPHClose"]?></td> <td><?php echo  $row["BAOpen"]?></td>
							<td><?php echo $row["BAClose"]?></td> <td><?php echo $row["BAPHOpen"]?></td> <td><?php echo  $row["BAPHClose"]?></td>
							<td><?php echo $row["BBOpen"]?></td> <td><?php echo $row["BBClose"]?></td>  <td><?php echo $row["BBPHOpen"]?></td>
							<td><?php echo$row["BBPHClose"]?></td> <td><?php echo $row["TFWOpen"]?></td>  <td><?php echo $row["TFWClose"]?></td>
						</tr>-->
						<tr>
							<td><?php echo $row["InstituteName"]?></td> <td><?php echo $row["BranchName"]?></td> <td><?php echo $row["OPOpen"]?></td>
							<td><?php echo $row["OPClose"]?></td> 
							<td><?php echo $row["SCOpen"]?></td> <td><?php echo $row["SCClose"]?></td> 
							<td><?php echo $row["STOpen"]?></td>  <td><?php echo  $row["STClose"]?></td>
						    <td><?php echo  $row["BAOpen"]?></td>
							<td><?php echo $row["BAClose"]?></td>
							<td><?php echo $row["BBOpen"]?></td> <td><?php echo $row["BBClose"]?></td>  
						</tr>
				<?php	}
					
				} 
				else{
					echo "0 results";
				}		
			}  		
		?>
		</tbody>
		<!--<tfoot>
		<tr>
					<th>InstituteName</th> <th>BranchName</th> <th>OPOpen</th>
					<th>OPClose</th> <th>OPPHOpen</th> <th>OPPHClose</th>
					<th>SCOpen</th>  <th>SCClose</th> <th>SCPHOpen</th>
					<th>SCPHClose</th> <th>STOpen</th> <th>STClose</th>
					<th>STPHOpen</th> <th>STPHClose</th> <th>BAOpen</th>
					<th>BAClose</th> <th>BAPHOpen</th> <th>BAPHClose</th>
					<th>BBOpen</th> <th>BBClose</th> <th>BBPHOpen</th>
					<th>BBPHClose</th> <th>TFWOpen</th> <th>TFWClose</th>
		</tr></tfoot>-->
	</table>
	</div>
	</body>
</html>
