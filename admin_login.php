<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
         body {
    background-image: url(./assets/images/fpeimages.jpg);
    height: 96vh;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
    </style>
</head>
<body>
    <div class="container justify-content-center">
        <div class="row justify-content-center">
            <div class="col-lg-6 mt-4">
                <form action="login.php" method="post">
                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group mt-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group mt-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">Login</button>
        </div>
        <div class="form-group -mt">
            Don't have an account..? <a href="register.php">click here</a> <a href="homepage.php" style="margin-left:60px;">Go home</a>  
        </div>
      </div>
      <!-- <div class="modal-footer">
      <button type="submit" class="btn btn-primary form-control">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div> -->
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    
</body>
</html>