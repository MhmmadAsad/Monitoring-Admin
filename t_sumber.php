<!DOCTYPE html>
<html>
<head>
	<title> Info Modul | Monitoring System</title>
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

		/*Sidebar*/
		.container .sidebar{
			width:220px;
			height:735px;
			position:absolute;
			box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px 1px;
			background-color:#209ff1;
		}
		.sidebar h3 {
			color:white;
			font-size:21px;
			margin-top:10px;
			margin-bottom:15px;
			font-family:sans-serif;
		}
		.sidebar ul {
			list-style-type:none;
		}
		.sidebar li {
			padding:7px 0px;
		}
		.sidebar li a{
			font-family:century gothic;
			text-decoration:none;
			color:white;
			padding:10px;
			font-size:16px;
			transition: all .3s ease;
			-webkit-transition: all .3s ease;
		}
		.sidebar li a:hover {
			border-left:4px solid white;
			transition: all .3s ease;
			-webkit-transition: all .3s ease;
		}
		.sidebar span {
			color:white;
			font-weight:bold;	
			font-size:18px;
			margin-left:10px;
			font-family:century gothic;
		}
		.sidebar input{
			margin-left:10px;
			padding:10px 10px;
			border:none;
			border-radius:5px;
			margin-bottom:20px;
			transition:all .3s ease;
			-webkit-transition:all .3s ease;
		}
		.sidebar input:hover {
			border-radius:0px;
			transition:all .3s ease;
			-webkit-transition:all .3s ease;
		}
		.sidebar .active {
			border-left:4px solid white; 
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
			margin-left:230px;
		}
		.content h2{
			text-align: center;
			font-family:sans-serif;
			font-weight:bold;
			margin-bottom:10px;
		}
		.content .form{
			font-size:17px;
			padding:10px;
			font-family:century gothic;
		}
		.form input {
			font-family:century gothic;
			border-radius:.25rem;
			padding:5px 30px;
			margin-left:20px;
			border :1px solid #ced4da;
		}
		.form table,tr,td{
			padding:2px;
		}
		.form button {
			margin-top:10px;
			padding:10px 130px;
			background-color:#007bff;	
			border:none;
			cursor:pointer;
			color:white;
			font-family: sans-serif;
			border-radius:5px;
			transition:all .3s ease;
			-webkit-transition:all .3s ease;
		}
		.form button:hover {
		  	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			color:white;
			transition:all .3s ease;
			-webkit-transition:all .3s ease;
		}
		.form select {
			font-family:century gothic;
			border-radius:.25rem;
			padding:5px 10px;
			margin-left:20px;
			border :1px solid #ced4da;
		}
	</style>

<!-- HTML -->
<body>
	<div class="container">
		<div class="content">
			<div class="form">	
				<select class="absolute">
					<option selected="">Sumber 1 </option>
					<option >Sumber 2 </option>
					<option >Sumber 3 </option>
					<option >Sumber 4 </option>
					<option >Sumber 5 </option>
					<option >Sumber 6 </option>
					<option >Sumber 7 </option>
					<option >Sumber 8 </option>
					<option >Sumber 9 </option>
					<option >Sumber 10 </option>
					<option >Sumber 11 </option>
					<option >Sumber 12 </option>
					<option >Sumber 13 </option>
					<option >Sumber 14 </option>
					<option >Sumber 15 </option>
					<option >Sumber 16 </option>
					<option >Sumber 17 </option>
					<option >Sumber 18 </option>
					<option >Sumber 19 </option>
					<option >Sumber 20 </option>

				</select>
				<center>	
				<form action="" method="">
					<table>
						<tr>
							<td>Nama Modul</td>
							<td><input type="text" name=""></td>
						</tr>
						<tr>
							<td>Mode</td>
							<td>
								<input type="radio" name=""> TCP
								<input type="radio" name="" checked=""> RTU
							</td>
						</tr>
						<tr>
							<td>IP Target</td>
							<td><input type="text" name=""></td>
						</tr>
						<tr>
							<td>Port Tujuan</td>
							<td><input type="text" name=""></td>
						</tr>
						<tr>
							<td>Function Code</td>
							<td>
								<select name="">
									<option value="">Read Coil Status (01)</option>
									<option value="">Read Holding Registers (03)</option>							
									<option value="">Read Input Regsiters (04)</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>ID Tujuan</td>
							<td><input type="text" name=""></td>
						</tr>
						<tr>
							<td>Star Addr</td>
							<td><input type="text" name=""></td>
						</tr>
						<tr>
							<td>Panjan Data</td>
							<td><input type="text" name=""></td>
						</tr>
						<tr>
							<td>Alamat Modul</td>
							<td><input type="text" name=""></td>
						</tr>
						<tr>
							<td>Tipe Data</td>
							<td>
								<select name="">
									<option value="">Int</option>
									<option value="">Float</option>							
								</select>
							</td>
						</tr>
						<tr>
							<td>Lebar Data</td>
							<td>
								<select name="">
									<option value="">32</option>
									<option value="">16</option>							
								</select>
							</td>
						</tr>
						<tr>
							<td>Swap</td>
							<td>
								<select name="">
									<option value="">Normal</option>
									<option value="">Byte</option>
									<option value="">Word</option>							
									<option value="">Byte and Word</option>											
								</select>
							</td>
						</tr>
						<tr>
							<td>Status</td>
							<td>
								<input type="radio" name="" ><font color="#28a745"><b>Aktif</b></font>
								<input type="radio" name="" checked=""><font color="#dc354"><b>Mati</b></font>
							</td>
						</tr>
					</table>
							<button type="submit">Update</button>
				</form>
				</center>
			</div>
		</div>

	</div>

<div style="display:none;">	

</body>
</html>