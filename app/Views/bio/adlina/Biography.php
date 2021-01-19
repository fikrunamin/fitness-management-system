<!DOCTYPE html>
<html>
<head>
	<title>Biography</title>
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
	<style type="text/css">
		body {
			background-image: url('img/Trees_1920x1234.png');
			font-family: 'Amatic SC', cursive;
			background-size: cover;
			background-position: center;
  			background-repeat: no-repeat;
  			background-attachment: fixed;
  
		}

		.image {
			  display: block;
			  margin-left: auto;
			  margin-right: auto;
			  border-style: dashed; 
			  padding: 5px; 
			  border-color: #60948d;

			}

		.image:hover {
			-ms-transform: scale(1.1); /* IE 9 */
  			-webkit-transform: scale(1.1); /* Safari 3-8 */
  			transform: scale(1.1);
		}

		.info {
			 background-color: 	rgb(141, 171, 163, .7); 
			 padding: 45px; 
			 border-style: dashed; 
			 font-size: 30px;
			 width: auto;

		}

		#svgelem{
			 position: relative;
			 left: 85%;
			 -webkit-transform: translateX(-40%);
			 -ms-transform: translateX(-40%);
			 transform: translateX(-40%); 
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

	</style>

</head>
<body>
	<br>
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
		
		<span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; OPEN ME</span>
	</div>
	<div style="text-align: center;">
<svg width="250" height="50">
  <!--<circle cx="50" cy="50" r="50" />-->
  <path d="M5 50a45 45 0 1 1 90 0" fill="#42668a" />
</svg>

<svg width="100" height="50">
  <!--<circle cx="50" cy="50" r="50" />-->
  <path d="M5 50a45 45 0 1 1 90 0" fill="#42668a" />
</svg>
	</div>
	<div>
		<h1 style="text-align: center; font-size: 55px; color: #5380ac;">ADLINA BINTI ABDUL KADIR</h1>
		<!-- <svg id="svgelem" height="200" xmlns="http://www.w3.org/2000/svg">
 		<polygon points="100,10 40,180 190,60 10,60 160,180" fill="#438674"/>
 		</svg> -->
		<img src="img/me.gif" alt="My Photo" class="image" style="width: 25%;">
	</div>
	<br><br>
	<div>  
		<table class="info" style="margin-left: auto; margin-right: auto; font-size: 30px;">
			<tr>
				<td>Age : </td>
				<td>22 Years Old</td>
			</tr>
			<tr>
				<td>Birthdate : </td>
				<td>10th October 1998</td>
			</tr>
			<tr>
				<td>Hometown : </td>
				<td>Bandar Sungai Buaya, Rawang, Selangor</td>
			</tr>
			<tr>
				<td>School : </td>
				<td>SK Bandar Sungai Buaya, MRSM Lenggong, MRSM Taiping, UTeM</td>
			</tr>
			<tr>
				<td>Hobbies : </td>
				<td>Playing games, watch youtube, reading</td>
			</tr>
			<tr>
				<td>Ambition : </td>
				<td>Digital Forensics</td>
			</tr>  
		</table> 
	</div>
	<!--<div>
		<audio controls autoplay>
			 <source src="/html5/audio.ogg" type="audio/ogg" />
			 <source src="audio/BTS - 봄날 (Spring Day).mp3" type="audio/mpeg" />
			 Your browser does not support the <audio> element.
		 </audio>

	</div>  -->

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
</body>
</html>
<!--  	<div class="info" style="float: left; width: 14.2%; height: 350px;">
		<h2>Age :</h2><p> 22 Years Old</p>
	</div>
	<div class="info" style="float: left; width: 14.2%; height: 350px;">
		<h2>Birthdate :</h2> <p>10th October 1998</p>
	</div>
	<div class="info" style="float: left; width: 14.2%; height: 350px;">
		<h2>Hometown :</h2> <p>Bandar Sungai Buaya, Rawang, Selangor</p>
	</div>
	<div class="info" style="float: left; width: 14.2%;height: 350px;">
		<h2>School :</h2> 
		<ul style="font-size: 31px;">
			<li>SK Bandar Sungai Buaya</li>
			<li>MRSM Lenggong</li>
			<li>MRSM Taiping</li>
			<li>UTeM</li>
		</ul>
	</div>
	<div class="info" style="float: left; width: 14.2%;height: 350px;">
		<h2>Hobbies :</h2> <p>Playing games, watch youtube, reading</p>
	</div>
	<div class="info" style="float: left; width: 14.2%;height: 350px;">
		<h2>Ambition :</h2> <p>Digital Forensics</p>
	</div> -->
