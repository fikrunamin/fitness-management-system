<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Roboto font link -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <title>Fitness Management System</title>

    <style type="text/css">
        body {
            font-family: 'Roboto', sans-serif;
        }

        .float-container {
            border: 3px solid #fff;
            padding: 20px;
        }

        .title {
            color: #4299e1;
            width: 50%;
            float: left;
            padding: 20px;
        }

        .header {
            width: 50%;
            float: left;
            padding: 20px;
            text-align: center;
        }

        #login {
            border-radius: 8px;
            background-color: #4299e1;
            color: white;
            width: 90px;
        }

        #register {
            border-radius: 8px;
            border: 2px solid #4299e1;
            background-color: white;
            color: #4299e1;
        }

        #login:hover,
        #join:hover {
            background-color: #4169e1;
        }

        #register:hover {
            border: 2px solid #4169e1;
        }

        .content {
            clear: both;
            background-image: url('img/landing/fitness.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            display: block;
        }

        .text {
            width: 50%;
            background-color: rgb(246, 173, 85, 0.7);
            padding: 2%;
            margin-left: 5%;
            border-radius: 12px;
        }

        #join {
            border-radius: 8px;
            background-color: #4299e1;
            color: white;
            padding: 2%;
            font-size: 20px;
        }

        .group {
            background-color: rgb(246, 173, 85);
            display: block;
            padding: 0.5%;
            color: white;
        }
    </style>
</head>

<body>

    <div class="float-container">
        <div class="title">
            <center>
                <h1>Fitness Management System</h1>
            </center>
        </div>

        <div class="header">
            <a href="/auth/login" class="btn .btn-lg" id="login">Login</a>
            <a href="/auth/register" class="btn .btn-lg" id="register">Register</a>
        </div>
    </div>

    <div class="content">
        <div class="text">
            <center>
                <h3>Fitness Management System aim to help you stay fit at your own comfort</h3>
            </center>
            <br>
            <center>
                <h4>We provide you with selections of workout regime and diet plan for you to choose</h4>
            </center>
            <br>
            <center>
                <h4>Our instructor will also guide you through your fitness journey</h4>
            </center>
            <br>
            <center><a href="/auth/register" class="btn .btn-lg" id="join">Join Now !!!</a></center>
        </div>
        <img src="img/landing/workout.jpg" style="visibility: hidden;">
    </div>
    <!--  -->
    <div class="group">
        <center>
            <p>Created by <b>Group 11</b></p>
        </center>
    </div>
</body>

</html>