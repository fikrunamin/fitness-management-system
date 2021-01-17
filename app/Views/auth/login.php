<html lang="en">

<head>
    <title>Login page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/auth/login/style.css'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <a href="/">
        <img border="0" alt="landingpage" src="/img/auth/login/home.png" width="50" height="50">
    </a>
</head>

<body>

    <div class="big-banner">
        <div class="container">
            <h2>Sign In</h2>
            <form action="" class="needs-validation" method="post" novalidate>
                <div class="form-group">
                    <label for="uname">Email:</label>
                    <input type="email" class="form-control" id="uname" placeholder="Enter email" name="email" required>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

                <p>
                    Not a member? <a href="/auth/register">Register</a>
                </p>
            </form>
        </div>

        <script>
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    var forms = document.getElementsByClassName('needs-validation');
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>

        <div class="group">
            <center>
                <p>Created by <b>Group 11</b></p>
            </center>
        </div>
        <?php if (session()->getFlashData('msg')) : ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script>
                Swal.fire(
                    'Error',
                    '<?= session()->getFlashData('msg'); ?>',
                    'error'
                )
            </script>
        <?php endif; ?>
</body>

</html>