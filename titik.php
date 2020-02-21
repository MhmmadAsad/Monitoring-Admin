<html>
<head>
	<title> Titik Ukur | Monitoring System</title>
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
			width:83%;
			padding:24px;
			background-color:#f8f9fa;
			
		}
		.nav h3 {
			font-family:century gothic;
			font-weight:normal;
			float:right;
		}

		/*Content*/
		.content {
			margin-left:250px;
		}

		/*Pagination*/
		.content .pagination {
		  display: inline-block;
		  margin-top:20px;
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
			margin-top:20px;
			font-size:18px;
			text-align: center;
			padding:7px 45px;
			font-family:century gothic;
			border-collapse: collapse;
			border-top:1px solid black;
		}
		.content input {
			padding:7px;
			font-family:century gothic;
			border-radius:.25rem;
			border:2px solid #ced4da;
		}
		.content button {
			background-color:#007bff;	
			color:white;
			cursor:pointer;
			border:none;
			font-family:sans-serif;
			padding:10px 20px;
			border-radius:5px;
			transition:all .3s ease;
			-webkit-transition:all .3s ease;
		}
		.content button:hover {
		  	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			color:white;
			transition:all .3s ease;
			-webkit-transition:all .3s ease;
		}


	</style>

<!-- HTML -->
<body>
	<div class="container">
		<div class="content">

			<div class="pagination">
				<a href="#">&laquo;</a>
				<a class="active" href="titik.html">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#">6</a>
				<a href="#">7</a>
				<a href="#">&raquo;</a>
			</div>
			<div class="table" >
				<table width="950px">
					<tr style="font-weight:bold;">
						<td>No</td>
						<td>ID Titik</td>
						<td>Keterangan</td>
						<td>Status Kirim</td>
					</tr>
					<form action="" method=""> 
					<tr>
						<td>1</td>
						<td><input type="number" name=""></td>
						<td><input type="text" name=""></td>
						<td>
							<input type="radio" name="" value="aktif"><font color="#28a745"><b>Aktif</b></font>&nbsp;
							<input type="radio" name="" value="mati" checked="" ><font color="#dc354"><b>Mati</b></font>

						</td>
					</tr>
					<tr>
						<td>2</td>
						<td><input type="number" name=""></td>
						<td><input type="text" name=""></td>
						<td>
							<input type="radio" name="" value="aktif"><font color="#28a745"><b>Aktif</b></font>&nbsp;
							<input type="radio" name="" value="mati" checked="" ><font color="#dc354"><b>Mati</b></font>

						</td>
					</tr>
					<tr>
						<td>3</td>
						<td><input type="number" name=""></td>
						<td><input type="text" name=""></td>
						<td>
							<input type="radio" name="" value="aktif"><font color="#28a745"><b>Aktif</b></font>&nbsp;
							<input type="radio" name="" value="mati" checked="" ><font color="#dc354"><b>Mati</b></font>

						</td>
					</tr>
										<tr>
						<td>4</td>
						<td><input type="number" name=""></td>
						<td><input type="text" name=""></td>
						<td>
							<input type="radio" name="" value="aktif"><font color="#28a745"><b>Aktif</b></font>&nbsp;
							<input type="radio" name="" value="mati" checked="" ><font color="#dc354"><b>Mati</b></font>

						</td>
					</tr>

					<tr>
						<td>5</td>
						<td><input type="number" name=""></td>
						<td><input type="text" name=""></td>
						<td>
							<input type="radio" name="" value="aktif"><font color="#28a745"><b>Aktif</b></font>&nbsp;
							<input type="radio" name="" value="mati" checked="" ><font color="#dc354"><b>Mati</b></font>

						</td>
					</tr>

					<tr>
						<td>6</td>
						<td><input type="number" name=""></td>
						<td><input type="text" name=""></td>
						<td>
							<input type="radio" name="" value="aktif"><font color="#28a745"><b>Aktif</b></font>&nbsp;
							<input type="radio" name="" value="mati" checked="" ><font color="#dc354"><b>Mati</b></font>

						</td>
					</tr>

					<tr>
						<td>7</td>
						<td><input type="number" name=""></td>
						<td><input type="text" name=""></td>
						<td>
							<input type="radio" name="" value="aktif"><font color="#28a745"><b>Aktif</b></font>&nbsp;
							<input type="radio" name="" value="mati" checked="" ><font color="#dc354"><b>Mati</b></font>

						</td>
					</tr>

					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><button type="submit">Submit</button></td>
					</tr>
					</form>

				</table>
			</div>
		</div>


	</div>
<div style="display:none;">	

</body>
</html>