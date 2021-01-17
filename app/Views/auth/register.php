<!doctype html>
<html>

<head>
    <title>Registration page</title>
    <link rel="stylesheet" type="text/css" href="/css/auth/register/style.css">

    <a href="/">
        <img border="0" alt="landingpage" src="/img/auth/register/home.png" width="70" height="70">
    </a>
</head>

<body>

    <div class="header">

        <h2>Create Account</h2>

    </div>
    <form method="post" action="">
        <?= $validation->listErrors(); ?>
        <div class="input-group">
            <label>Full name</label>
            <input type="text" name="fullname" value="">
        </div>
        <div class="input-group">
            <label>Occupation</label>
            <input type="text" name="occupation" value="" required>
        </div>
        <div class="gender">
            <label>Gender</label><br></br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
        </div>
        <div class="input-group">
            <label>Birthdate</label>
            <input type="date" id="birthdate" name="birthdate" required>
        </div>
        <div class="input-group">
            <label>Preferred Workout Time</label>
            <select name="workout_time" id="workout_time" style="width: 100%; height: 50px; border-radius: 5px;" required>
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
                <option value="evening">Evening</option>
            </select>
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" id="password_1" name="password" required>
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" id="password_2" name="confirm_password" required>
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>
            Already a member? <a href="/auth/login">Sign in</a>
        </p>
        <script type="text/javascript">
            var password = document.getElementById("password_1"),
                confirm_password = document.getElementById("password_2");

            function validatePassword() {
                if (password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("Passwords Don't Match");
                } else {
                    confirm_password.setCustomValidity('');
                }
            }

            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
        </script>

    </form>
    <div class="group">
        <center>
            <p>Created by <b>Group 11</b></p>
        </center>
    </div>

</body>

</html>