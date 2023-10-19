<!-- Modal -->
<?php
                    if(isset($_SESSION['status']))
                    {
                                           
                        ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong></strong> <?php echo $_SESSION['status'] ?>
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                    ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="login.php" method="POST">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Sign Up</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <div class="form-group mt-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group mt-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary form-control" name="auth">Login</button>
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
      </div>
      <div class="form-group">
        <label for="" class=" float-end">Hibertech Solution</label>
      </div>
    </div>
    </form>
  </div>
</div>
<!-- End of modal -->
<?php session_start() ?>
<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration</title>
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
        <!-- Navigation bar start  -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark" style="background: black;">
  <a class="navbar-brand" href="#"><img src="assets/images/logos.png"width="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color:white; font-weight: bold;">FEDERAL POLYTECHNIC EDE, OSUN STATE <span class="sr-only"></span></a>
      </li>
      <li class="nav-item float end">
        <a class="nav-link" href="#">ID Card Genarator</a>
      </li> -->
<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->
    <!-- </ul> -->
    <form class="form-inline my-2 my-lg-0">
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    </form>
  </div>
</nav>
<!-- Navigation bar end  -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 mt-4">
            <?php
                    if(isset($_SESSION['status']))
                    {
                                           
                        ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong></strong> <?php echo $_SESSION['status'] ?>
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                    ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Registration</h4>
                    </div>
                    <div class="card-body">
                        <form action="save.php" method="POST">

                        <div class="form-group ">
                            <input type="text" name="name" class="form-control" placeholder="Fullname" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" name="gender" class="form-control" placeholder="Gender" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="phone" name="phone" class="form-control" placeholder="Phone" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" name="data_saved" class="btn btn-primary">Register</button>
                        </div>
                        <div class="form-group mt-2">
                        Already have an account   <a href="admin_login.php"> Login</a> 
                        <a href="homepage.php" style="margin-left:60px;">Go home</a>  
                      </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery=3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>