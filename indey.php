<!DOCTYPE html>
<html>
<head>
	<title> Data | Monitoring System</title>
</head>

	<!-- Css -->
	<style type="text/css">
		*{
			padding:0px;
			margin:0px;
		}


		.container{
			font-family:calibri;
		}

		/*Navbar*/
		.container .nav{	
			float:right;
			text-align:center;
			height:28px;
			margin-bottom:25px;
			box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 4px 0px;
			width:1105px;
			padding:24px;
			background-color:#f8f9fa;
			
		}
		.nav h3 {
			font-family:century gothic;
			font-weight:normal;
			float:right;
		}
				/*Dropdown*/

		.dropdown {
		  position: relative;
		  display: inline-block;
		}

		.dropdown-content {
		  display: none;
		  margin-left:80px;
		  font-size:16px;
		  margin-top:-30px;
		  position: absolute;
		  background-color: #209ff1;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}

		.dropdown-content a {
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		}


		.dropdown:hover .dropdown-content {display: block;}

		.dropdown:hover .dropbtn {background-color: #3e8e41;}

		/*Content*/
		.content {
			margin-left:250px;
		}

		/*Pagination*/
		.content .pagination {
		  display: inline-block;
		}

		.content .pagination a {
		  color: black;
		  float: left;
		  font-size:17px;
		  padding: 8px 16px;
		  text-decoration: none;
		  border: 1px solid #ddd;
		}

		.content .pagination a.active {
		  background-color: #209ff1;
		  color: white;
		  border: 1px solid #209ff1;
		}

		.content .pagination a:hover:not(.active) {background-color: #ddd;}

		.content .pagination a:first-child {
		  border-top-left-radius: 5px;
		  border-bottom-left-radius: 5px;
		}

		.content .pagination a:last-child {
		  border-top-right-radius: 5px;
		  border-bottom-right-radius: 5px;
		}

		/*Table*/
		.content table,tr,td {
			width:50%;
			margin-top:20px;
			font-size:18px;
			text-align: center;
			padding:7px 45px;
			font-family:century gothic;
			border-collapse: collapse;
			border-top:1px solid black;
		}


	</style>

<!-- HTML -->
<body>
	<div class="container">
		<div class="nav">
			<h3 style="float:left; padding:0px 13px;margin-left:40px;"><b>Data Modul</b></h3>
			<h3>Monita Online Monitoring System</h3>
		</div>
	
		<div class="content">
	<div class="pagination">
				<a href="#">&laquo;</a>
				<a class="active" href="indey.html">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#">6</a>
				<a href="#">7</a>
				<a href="#">&raquo;</a>
			</div>
			<div class="table" >
				<table>
					<tr style="font-weight:bold;">
						<td>No</td>
						<td>Kanal</td>
						<td>Nilai</td>
						<td>Keterangan</td>
					</tr>
					<tr>
						<td>1</td>
						<td>1</td>
						<td>1151.00</td>
						<td>Volt A</td>
					</tr>
					<tr>
						<td>1</td>
						<td>1</td>
						<td>1151.00</td>
						<td>Volt A</td>
					</tr>
					<tr>
						<td>1</td>
						<td>1</td>
						<td>1151.00</td>
						<td>Volt A</td>
					</tr>
					<tr>
						<td>1</td>
						<td>1</td>
						<td>1151.00</td>
						<td>Volt A</td>
					</tr>
					<tr>
						<td>1</td>
						<td>1</td>
						<td>1151.00</td>
						<td>Volt A</td>
					</tr>
					<tr>
						<td>1</td>
						<td>1</td>
						<td>1151.00</td>
						<td>Volt A</td>
					</tr>
					<tr>
						<td>1</td>
						<td>1</td>
						<td>1151.00</td>
						<td>Volt A</td>
					</tr>
					<tr>
						<td>1</td>
						<td>1</td>
						<td>1151.00</td>
						<td>Volt A</td>
					</tr>
					<tr>
						<td>1</td>
						<td>1</td>
						<td>1252.00</td>
						<td>Volt A</td>
					</tr>
					<tr>
						<td>1</td>
						<td>1</td>
						<td>1252.00</td>
						<td>Volt A</td>
					</tr>
					<tr>
						<td>1</td>
						<td>1</td>
						<td>1252.00</td>
						<td>Volt A</td>
					</tr>
				</table>
			</div>
		</div>

	</div>

</body>
</html>