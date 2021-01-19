<!DOCTYPE html>
<html>
<head>
	<title>Game</title>
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
	<style type="text/css">

		body{
			background-image: url('img/gbg.jpg');
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

			#dropZone,
			#games {
			  display: flex;
			  flex-flow: row nowrap;
			  justify-content: space-between;
			  min-height: 200px;
			  margin-bottom: 20px;
			}

			#dropBox1,
			#dropBox2,
			#dropBox3,
			#dropBox4 {
			  display: flex;
			  flex-flow: column nowrap;
			  justify-content: center;
			  align-items: center;
			  height: 250px;
			  width: 250px;
			  border: 5px solid #ff3385;
			  padding: 1rem;
			}

			img {
			  height: 200px;
			  object-fit: cover;
			  width: 200px;
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
		<span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; OPEN ME</span>
	</div>

	<div style="text-align: center;" >
		<h1 style="font-size: 55px;">Games in a game</h1>
		<p style="font-size: 30px;">Some of my favourite games. Drag and drop the image to the name of the game</p>
		
	</div>

	<div id="dropZone">
	  <div
	    id="dropBox1"
	    ondrop="drop(event)"
	    ondragover="allowDrop(event)"
	  >
	  <p style="font-size: 30px;">Subway Surfers</p>
	    
	 </div>
	 <div
	    id="dropBox2"
	    ondrop="drop(event)"
	    ondragover="allowDrop(event)"
	  >
	  <p style="font-size: 30px;">Genshin</p>
	    
	  </div>
	  <div
	    id="dropBox3"
	    ondrop="drop(event)"
	    ondragover="allowDrop(event)"
	  >
	    <p style="font-size: 30px;">Duskwood</p>
	  </div>
	  <div
	    id="dropBox4"
	    ondrop="drop(event)"
	    ondragover="allowDrop(event)"
	  >
	  <p style="font-size: 30px;">Among Us</p>
	    
	  </div>
	</div>
	
	<div
		  id="games"
		  ondrop="drop(event)"
		  ondragover="allowDrop(event)"
		>
		  <img
		    id="genshin"
		    src="img/genshin.png"
		    draggable="true"
		    ondragstart="drag(event)"
		    width="300"
		  />
		<img
		    id="duskwood"
		    src="img/duskwood.png"
		    draggable="true"
		    ondragstart="drag(event)"
		    width="300"
		  />
		<img
		    id="amongus"
		    src="img/among us.png"
		    draggable="true"
		    ondragstart="drag(event)"
		    width="300"
		  />
		<img
		    id="subway"
		    src="img/subway.png"
		    draggable="true"
		    ondragstart="drag(event)"
		    width="300"
		  />
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
		function allowDrop(event) {
		  event.preventDefault();
		}
		function drag(event) {
		  event.dataTransfer.setData("text", event.target.id);
		}
		function drop(event) {
		  event.preventDefault();
		  var data = event.dataTransfer.getData("text");
		  event.target.appendChild(document.getElementById(data));
		}
	</script>
</body>
</html>