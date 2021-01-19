<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
	<style type="text/css">

		body{
			background-image: url('img/Trees_1920x1234.png');
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

			.comment,.select{
				font-size: 40px;
				text-align: center;
			}

			input[type=submit], input[type=button]{
			  background-color: #5380ac;
			  border: none;
			  color: white;
			  padding: 16px 32px;
			  text-decoration: none;
			  margin: 4px 2px;
			  cursor: pointer;
			}

			input[type=submit]:hover, input[type=button]:hover{
				background-color: #262626;
			}

			output {
			  position: absolute;
			  top: -32px;
			  display: none;
			  width: 40px;
			  height: 24px;
			  border: 1px solid #e2e2e2;
			  background-color: #fff;
			  border-radius: 3px;
			  color: #777;
			  font-size: .8em;
			  line-height: 24px;
			  text-align: center;
			}

			input[type=range]:active + output {
			  display: block;
			  transform: translateX(-50%);
			}
	</style>

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

	<div>
		<h1 style="text-align: center; font-size: 55px; float: left; padding-left: 40%;">FEEDBACK FORM</h1>
		<canvas id="canvas" width="400" height="300"></canvas>
	</div>
	<br>


	<div class="comment">
	  <form action = "/cgi-bin/html5.cgi" method = "get">
		 Date : <input type = "date" name = "newinput" />
     </form>

     <form action = "/cgi-bin/html5.cgi" method = "get">
			 Rating : <input type = "range" min = "0" max = "10" step "1"
			 value = "5" name = "newinput" />
			 <output name="rangeVal">5</output>
		</form>

		<form action="Feedback.html" name="myform1">
		  <label for="comm">Any Comment? </label><br>
		  <textarea type="text" id="comm" name="x" rows="9" cols="50"></textarea><br>
		  <input type="submit" value="Submit" onclick="DisplayX(); window.alert('Thank you for your feedback :)');">
		</form>
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
  	var canvas = document.getElementById('canvas');
	var ctx = canvas.getContext('2d');

	ctx.beginPath();
	//arc(x,y,r,sAngle,eAngle,counterclockwise);
	ctx.arc(75, 75, 50, 0, Math.PI * 2, true); // Outer circle
	ctx.moveTo(110, 75);
	ctx.arc(75, 75, 35, 0, Math.PI, false); // Mouth (clockwise)
	ctx.moveTo(65, 65);
	ctx.arc(60, 65, 5, 0, Math.PI * 2, true); // Left eye
	ctx.moveTo(95, 65);
	ctx.arc(90, 65, 5, 0, Math.PI * 2, true); // Right eye
	ctx.stroke();

  </script>

  <script type="text/javascript">
  	$('input[type="range"]').on('input', function() {

  var control = $(this),
    controlMin = control.attr('min'),
    controlMax = control.attr('max'),
    controlVal = control.val(),
    controlThumbWidth = control.data('thumbwidth');

  var range = controlMax - controlMin;
  
  var position = ((controlVal - controlMin) / range) * 100;
  var positionOffset = Math.round(controlThumbWidth * position / 100) - (controlThumbWidth / 2);
  var output = control.next('output');
  
  output
    .css('left', 'calc(' + position + '% - ' + positionOffset + 'px)')
    .text(controlVal);

});
  </script>

  <script type ="text/javascript" >
		function DisplayX()
		{ alert('Feedback: ' + document.myform1.x.value); }
  </script>
</head>
</body>
</html>