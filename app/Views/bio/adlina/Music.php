<!DOCTYPE html>
<html>
<head>
	<title>Music</title>
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">

		body{
			background-color: #132639;
			/*background-color: #333742;*/
			/*background-image: url('img/mbg.jpg');*/
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

			#star1{
				 position: relative;
				 left: 10%;
				 -webkit-transform: translateX(-40%);
				 -ms-transform: translateX(-40%);
				 transform: translateX(-40%);
				}

			#star2{
				 position: relative;
				 left: 70%;
				 -webkit-transform: translateX(-40%);
				 -ms-transform: translateX(-40%);
				 transform: translateX(-40%);
				}

			#star3{
				 position: relative;
				 left: 50%;
				 -webkit-transform: translateX(-40%);
				 -ms-transform: translateX(-40%);
				 transform: translateX(-40%);
				}

			#star4{
				 position: relative;
				 left: 30%;
				 -webkit-transform: translateX(-40%);
				 -ms-transform: translateX(-40%);
				 transform: translateX(-40%);
				}

			#star5{
				 position: relative;
				 left: 20%;
				 -webkit-transform: translateX(-40%);
				 -ms-transform: translateX(-40%);
				 transform: translateX(-40%);
				}

			#star6{
				 position: relative;
				 left: 40%;
				 -webkit-transform: translateX(-40%);
				 -ms-transform: translateX(-40%);
				 transform: translateX(-40%);
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
		<span style="font-size:40px;cursor:pointer; color: #ffffff" onclick="openNav()">&#9776; OPEN ME</span>
	</div>

	<div>
		
	</div>
	<div>
		<svg id="star1" height="100" xmlns="http://www.w3.org/2000/svg">
		 <polygon points="50,5 20,90 95,30 5,30 80,90" fill="#F0F3E2"/>
		</svg>

		<svg id="star4" height="90" xmlns="http://www.w3.org/2000/svg">
		 <polygon points="25,2.5 10,45 47.5,15 2.5,15 40,45" fill="#F0F3E2"/>
		</svg>

		<svg id="star3" height="90" xmlns="http://www.w3.org/2000/svg">
		 <polygon points="25,2.5 10,45 47.5,15 2.5,15 40,45" fill="#F0F3E2"/>
		</svg>

		<h1 style="text-align: center; font-size: 55px; color: #5380ac;">Songs Recommendation</h1>

	</div>
	<br>

	<div>
		<svg id="star1" height="100" xmlns="http://www.w3.org/2000/svg">
		 <polygon points="25,2.5 10,45 47.5,15 2.5,15 40,45" fill="#F0F3E2"/>
		</svg>

		<svg id="star2" height="200" xmlns="http://www.w3.org/2000/svg">
		 <polygon points="50,5 20,90 95,30 5,30 80,90" fill="#F0F3E2"/>
		</svg>

		<svg id="star4" height="90" xmlns="http://www.w3.org/2000/svg">
		 <polygon points="25,2.5 10,45 47.5,15 2.5,15 40,45" fill="#F0F3E2"/>
		</svg>

		<svg id="star5" height="200" xmlns="http://www.w3.org/2000/svg">
		 <polygon points="50,5 20,90 95,30 5,30 80,90" fill="#F0F3E2"/>
		</svg>
	</div>

	<!-- <div>
		<canvas id="myCanvas" width="200" height="100">
Your browser does not support the HTML canvas tag.</canvas>
	</div> -->

	<div style="text-align: center; color: #7EA18C; float: left; padding-right: 16%; padding-left: 20px;">
		<h1>B.A.P - Wake Me Up</h1>
		<audio controls autoplay>
			 <source src="/html5/audio.ogg" type="audio/ogg" />
			 <source src="audio/B.A.P - WAKE ME UP.mp3" type="audio/mpeg" />
			 Your browser does not support the <audio> element.
		 </audio>
	</div>
	<div style="text-align: center; color: #7EA18C; float: left; padding-right: 16%; padding-left: 8%;">
		<h1>Raindrops - 蜜ノ味</h1>
		<audio controls>
			 <source src="/html5/audio.ogg" type="audio/ogg" />
			 <source src="audio/Rain Drops蜜ノ味Music Video(513(wed)発売シナスタジア収録曲).mp3" type="audio/mpeg" />
			 Your browser does not support the <audio> element.
		 </audio>
	</div>

	<div style="text-align: center; color: #7EA18C; float: right; padding-right: 10px;">
		<h1>Arcade - Duncan Laurence</h1>
		<audio controls>
			 <source src="/html5/audio.ogg" type="audio/ogg" />
			 <source src="audio/Arcade - Duncan Laurence .mp3" type="audio/mpeg" />
			 Your browser does not support the <audio> element.
		 </audio>
	</div>

	<div>
		<svg id="star4" height="90" xmlns="http://www.w3.org/2000/svg">
		 <polygon points="25,2.5 10,45 47.5,15 2.5,15 40,45" fill="#F0F3E2"/>
		</svg>

		<svg id="star5" height="200" xmlns="http://www.w3.org/2000/svg">
		 <polygon points="50,5 20,90 95,30 5,30 80,90" fill="#F0F3E2"/>
		</svg>

		<svg id="star6" height="200" xmlns="http://www.w3.org/2000/svg">
		 <polygon points="50,5 20,90 95,30 5,30 80,90" fill="#F0F3E2"/>
		</svg>
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
		ctx.beginPath();
		ctx.arc(95,50,40,0,2*Math.PI);
		ctx.stroke();

		ctx.strokeStyle = '#ffffff';
        ctx.stroke();
	</script>
</body>
</html>