<?php require_once 'loaded.php'; ?>

<html>
	<head>
		<title>Titik Ukur | Monitoring System</title>
	</head>
<body>
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
		.content iframe{
			border:none;
			width:100%;
			display:block;
			height:575px;
			margin-bottom:120px;
		}
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
		  width:83%;
		  right:0;	
		  margin-left:232px;
		  background-color: #333;
		}

		.topnav a {
		  float: left;
		  color: #f2f2f2;
		  font-family:century gothic !important; 
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
<body>
<div class="container">

	<div class="topnav">
		<a class="active" href="setting.html">Titik Ukur</a>
		<a href="setting.html?smb=2">Modul</a>
		<a href="setting.html?smb=3">Sumber</a>
	</div>

			<div class="content">
				<iframe src="titik.html" class="frame-1"></iframe>
			</div>



</div>
</body>
</html>