<!DOCTYPE html>
<html>
<head>
	<title>RCCG SOP</title>
	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<style>
/*			.sap{
				float: right;
				margin-top: 15px;
			}*/
				.jumbotron { 
    background-color: #gray;
    color: #orange;
     padding: 100px 25px;
     margin-top: -20px;
}
.carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
}

.carousel-indicators li {
    border-color: #f4511e;
}

.carousel-indicators li.active {
    background-color: #f4511e;
}
.col-sm-6 img{
	width: 100%;
	height: 350px;

}
.bg-frey{
	background-color: #f6f6f6;
}
.page-header{
		color: red;
		opacity: 0.6;
	}
.up-arrow{
/*	background-color: red;*/
	padding: 25px;
	color: blue;
	z-index: 34;
	opacity: 3.0;
}
.bg-rey a:link{
	text-decoration: none;
}
.bg-rey a:visted{
	text-decoration: none;
	color: red;
}
.bg-rey a:hover{
	text-decoration: none;
	color: blue;
}
.bg-rey a:active{
	text-decoration: none;
	color: green;
}


/*#myBtn{
	display: none;
	position: fixed;
	bottom: 20px;
	right: 30px;
	z-index: 99;
	border: none;
	outline: none;
	background-color: red;
	color: white;
	cursor: pointer;
	padding: 15px;
	border-radius: 10px;
	font-size: 18px;
}
#myBtn:hover {
	background-color: #555;
}*/
/*.logo{
	font-size: 50px;
}*/
		</style>

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-header">
				<p class="navbar-brand">RCCG SOP</p>
			</div>
		<div class="container-fluid" >
			<div class="collapse navbar-collapse" id="myNavbar">
			
			<ul class="nav navbar-nav" style="color: white; margin-top: 14px;">
				
			</ul>
			<div class="nav navbar-nav navbar-right">
			<li><a href="workers.php"><button type="button" class="btn btn-primary">WORKERS REGISTER</button></a></li>
			<li><a href="members.php"><button type="button" class="btn btn-primary">MEMBERS REGISTER</button></a></li>
			<li><a href="index.php" style="color: white;"><span class="glyphicon glyphicon-home"></span>Home</a> </li>
			</div>
			</div>
		</div>
		
	</nav>
	<div class="jumbotron text-center">
		<h3>You are welcome to the reedmeed christian church of God SOP Church Website.<br>We love you but Jesus Loves You more</h3>
	</div>
	<div class="container-fluid">
		<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
			<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner image-center" role="listbox">
				<div class="item active">
					<img src="image/image1.jpeg">
				</div>
				<div class="item">
					<img src="image/image2.jpeg">
				</div>
				<div class="item">
					<img src="image/image3.jpeg">
				</div>	
			</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
		</div>
		<div class="page-header">
			
		</div>
	</div>
	<div class="container-fluid text-center bg-frey">
		<div class="row">
			
			<div class="col-sm-6">
				<img src="image/pastor.jpg">
			</div>
			<div class="col-sm-6">
				<div class="page-header">
					<h3>Greetings from the pastor</h3>
				</div>
				<p>......You are Welcome to SOP parish......</p>
			</div>
		</div>
		<div>
			<h3 style="color: red; opacity: 0.6;">About the church</h3>
			<p>The church was founded.....</p>
<!-- 			<span class="glyphicon glyphicon-globe logo"></span> -->
			<button type="button" class="btn btn-primary">Read more</button>
			<a class="up-arrow" href="frontpage.html" data-toggle="tooltip" title="TO TOP" style="z-index: -10px; position: absolute; right: 0; bottom: 30;">
			<span class="glyphicon glyphicon-chevron-top"></span>
		</a><br><br>
		</div>
		<div class="container-fluid bg-rey">
			<p><a href="price.html">Donations and offering</a> </p>
		</div>
					
		<!-- <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> -->
	</div>
	<footer class="text-center" style="background-color: black; color: white; padding: 5px;">

		<p>© 2019 all rigths</p>
	</footer>
	<!-- <script >
		windows.onscroll= function(){scrollfunction()};
		function scrollFunction(){
			if (document.body.scrollTop> 20|| document.documentElement.scrollTop>20) {
				document.getElementById('myBtn').style.display = "block";
			}else{
				document.getElementById("myBtn").style.display = "none"
			}
		}
		function topFunction(){
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script> -->

</body>
</html>