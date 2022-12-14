<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row text-center">
      <div class="col-sm-6 text-black mb-4">
        <div class="px-5 ms-xl-4 mt-5 ">
        <nav class="navbar bg-light ">
         <div class="container-fluid ">
         <a class="navbar-brand text-center" href="#">
            <h2><img src="./image/pertamina2.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            <b>Pertamina Hulu Rokan</b></h2>
          </a>
        </div>
        </nav>  
        </div>
        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 pt-5 pt-xl-0 mt-xl-n5">
        <div class="card shadow-2-strong " style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <form style="width: 23rem;" action="./php/login_action.php" method="post" class="mb-5">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
              <input type="text" name="username" id="username" autofocus class="form-control form-control-lg" placeholder ="Username"/>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password1" id="password1" class="form-control form-control-lg" placeholder ="Password" />
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block btn-danger" type="submit" name="login" id="login" value="Login">Login</button>
            </div>
            <p>Don't have an account? <a href="register.php" class="link-info">Register here</a></p>
          </form>
        </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block mt-2">
        <img src="./image/channels4_profile.jpg "
          alt="Login image"  class="w-100 vh-100 mt-5" style="object-fit: cover; object-position: left; width : 50px">
      </div>
    </div>
  </div>
</section>
</body>
</html>