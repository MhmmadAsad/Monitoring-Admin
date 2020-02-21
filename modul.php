<html>
<head>
	<title> Modul | Monitoring System</title>
</head>


	<!-- Css -->
	<style type="text/css">
		*{
			overflow:hidden;
			padding:0px;
			margin:0px;
		}


		.container{
			width:fixed;
			overflow-y: hidden;
  			overflow-x: hidden;
			font-family:calibri;
		}

		/*Navbar*/
			.nav{	
			float:right;
			text-align:center;
			height:18px;
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
			width:17%;
			height:100%;
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
		.sidebar h4 {
			color:white;
			font-size:15px;
			font-weight:normal;
			text-align:center;
			font-family:consolas;
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
		  overflow:all;	
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
		.content iframe{
			border:none;
			width:100%;
			height:575px;
		}
		/*Footer*/
		.footer {
			position:fixed;
			width:80%;
			bottom:0;
			right:0;
			text-align:center;
			height:25px;
			box-shadow: rgba(0, 0, 0, 0.4) 0px 0px 4px 1px;
			font-family:century gothic;
			padding:20px;
			background-color:#f8f9fa;
			
		}
		.topnav {
		  overflow: hidden;
		  width:83%;	
		  margin-left:232px;
		  background-color: #333;
		}

		.topnav a {
		  float: left;
		  color: #f2f2f2;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}

		.topnav a:hover {
		  background-color: #209ff1;
		  color: white;
		}

		.topnav a.active {
		  background-color: #209ff1;
		  color: white;
		}
	


	</style>

<!-- HTML -->
<body>
	<div class="container">
		<div class="topnav">
  				<a href="setting.html">Titik Ukur</a>
				<a class="active" href="settings.html?smb=2">Modul</a>
				<a href="setting.html?smb=3">Sumber</a>
			</div>
		<div class="content">
			<iframe src="t_modul.html"></iframe>
		</div>
	
			
	</div>

<div style="display: none;">

</body>
</html>