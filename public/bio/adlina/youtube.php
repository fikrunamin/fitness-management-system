<!DOCTYPE html>
<html>
<head>
	<title>Youtube</title>
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
	<style type="text/css">

		body{
			background-color: black;
			/*background-image: url('img/slate.jpg');*/
			font-family: 'Amatic SC', cursive;
			background-size: cover;
			background-position: center;
  			background-repeat: no-repeat;
  			background-attachment: fixed;
		}
		.sidenav {
			  height: 100%;
			  width: 0;
			  position: fixed;
			  z-index: 1;
			  top: 0;
			  left: 0;
			  background-color: #111;
			  overflow-x: hidden;
			  transition: 0.5s;
			  padding-top: 60px;
			}

			.sidenav a {
			  padding: 8px 8px 8px 32px;
			  text-decoration: none;
			  font-size: 30px;
			  color: #818181;
			  display: block;
			  transition: 0.3s;
			}
			.dropdown-btn {
			  font-family: 'Amatic SC', cursive;
			  background-color: #111;
			  padding: 8px 8px 8px 32px;
			  text-decoration: none;
			  font-size: 30px;
			  color: #818181;
			  display: block;
			  border: none;
			  background: none;
			  width:100%;
			  text-align: left;
			  cursor: pointer;
			  outline: none;
			}

			.sidenav a:hover {
			  color: #f1f1f1;
			}

			.dropdown-btn:hover {
			  color: #f1f1f1;
			}

			.sidenav .closebtn {
			  position: absolute;
			  top: 0;
			  right: 25px;
			  font-size: 36px;
			  margin-left: 50px;
			}

			.dropdown-container {
			  display: none;
			  background-color: #262626;
			  padding-left: 8px;
			}

			.fa-caret-down {
			  float: right;
			  padding-right: 2px;
			}

			@media screen and (max-height: 450px) {
			  .sidenav {padding-top: 15px;}
			  .sidenav a {font-size: 18px;}
			}

			.triangle-container{
			  width: 500px;
			  margin: auto;
			  text-align:center;
			  border: 1px solid white;
			  
			    &:hover, &:active{
			      .triangle{
			        transform: rotate(-180deg); 
			      }
			    }
			  
			  .triangle{
			    fill: transparent;
			    stroke: white;
			    stroke-width: 8;
			    transition: all 0.8s ease-in-out;
			  
			  @keyframes mymove {
			    0%   {opacity:0}
			    50%  {opacity:1}
			    100% {opacity:0}
			  }
			    
			    transform-origin: 250px 250px;
			  }
			}

	</style>
</head>
<body>
	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="Biography.php">About Me</a>
	  <button class="dropdown-btn">Interest 
	    <i class="fa fa-caret-down"></i>
	  </button>
	  <div class="dropdown-container">
	    <a href="Music.php">Music</a>
	  	<a href="youtube.php">Youtube</a>
	  	<a href="Game.php">Games</a>
	  </div>
	  <a href="Feedback.php">Feedback</a>
	</div>

	<div>
		<span style="font-size:40px;cursor:pointer;color: #ffffff" onclick="openNav()">&#9776; OPEN ME</span>
	</div>

	<div>
		<svg id="svgelem" height="200" xmlns="http://www.w3.org/2000/svg">
		 <rect id="redrect" width="300" height="100" fill="#262626" />
		</svg>

		<svg id="svgelem" height="200" xmlns="http://www.w3.org/2000/svg">
		 <rect id="redrect" width="300" height="100" fill="white" />
		</svg>

		<svg id="svgelem" height="200" xmlns="http://www.w3.org/2000/svg">
		 <rect id="redrect" width="300" height="100" fill="#262626" />
		</svg>

		<svg id="svgelem" height="200" xmlns="http://www.w3.org/2000/svg">
		 <rect id="redrect" width="300" height="100" fill="white" />
		</svg>

		<svg id="svgelem" height="200" xmlns="http://www.w3.org/2000/svg">
		 <rect id="redrect" width="300" height="100" fill="#262626" />
		</svg>

		<svg id="svgelem" height="200" xmlns="http://www.w3.org/2000/svg">
		 <rect id="redrect" width="500" height="100" fill="white" />
		</svg>

	</div>

	<div style="float: left; padding-right: 20%; padding-left: 10%;">
		<h1 style="text-align: center; font-size: 55px; color: white;">Fav YouTube Recommendation</h1>
	</div>

	<div style="float: left;">
		<canvas id="triangle" height="100" width="150" style="border:1px solid #000000; padding: 10%; background-color: #cc0000; padding-left: 35%; border-radius: 20px;">Triangle</canvas>
	</div>
	<br>

	<div>
		<canvas id="myCanvas" width="1900" height="100">
Your browser does not support the HTML canvas tag.</canvas>
	</div>

	<div style="text-align: center;">
		<h1 style="color: #818181;">All Places</h1>
		<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/WXo07dpXNOc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

		<video width="560" height="315" controls autoplay style="border:1px solid #ffffff;">
			 <source src="/html5/foo.ogg" type="video/ogg" />
			 <source src="video/Sunset Timelapse (No Copyright Video)-360p.mp4" type="video/mp4" />
			 Your browser does not support the <video> element.
		</video>

	</div>

	<div style="text-align: center;">
		<h1 style="color: #818181;">BORE.D</h1>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/7OsaH8L7P44" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>

	<script>
	function openNav() {
	  document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
	  document.getElementById("mySidenav").style.width = "0";
	}
	</script>

	<script type="text/javascript">
		var dropdown = document.getElementsByClassName("dropdown-btn");
		var i;

		for (i = 0; i < dropdown.length; i++) {
		  dropdown[i].addEventListener("click", function() {
		    this.classList.toggle("active");
		    var dropdownContent = this.nextElementSibling;
		    if (dropdownContent.style.display === "block") {
		      dropdownContent.style.display = "none";
		    } else {
		      dropdownContent.style.display = "block";
		    }
		  });
		}
	</script>

	<script type="text/javascript">
		var c = document.getElementById("myCanvas");
		var ctx = c.getContext("2d");
		ctx.lineTo(0, 0);
		ctx.lineTo(1900, 0);
		ctx.strokeStyle = '#ffffff';
        ctx.stroke();
	</script>

	<script type="text/javascript">
	  var canvas = document.getElementById('triangle');
	  var context = canvas.getContext('2d');

	  context.beginPath();
	  context.moveTo(0, 0);
	  context.lineTo(100, 50);
	  context.lineTo(0, 100);

	  context.closePath();

	  context.fillStyle = "rgb(255,255,255)";
	  context.fill();
	</script>

	
</body>
</html>