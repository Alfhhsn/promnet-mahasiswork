<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MahasisWork | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
  </head>

  <body>
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-6">
          <img src="img/login image.png" alt="">
        </div>
        <div class="col-6 text-center right">
          <h1 class="welcome">Welcome back, people!</h1>
          <span class="desc">Welcome back! Please enter your details</span>
          <button type="button" class="btn btn-outline-light goog-log">Login with Google</button>
          <div class="identity">
            <div class="form-floating mb-3 my-4">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3 my-2">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
          </div>
          <section class="create-acc">
            <span class="create">Create an account? <a href="/sign-up">Here</a></span>
          </section>
          <section class="remember">
            <input class="form-check-input mt-0 klik" type="checkbox" value="" aria-label="Checkbox for following text input">
            <span class="remember-text">Remember Login</span>
          </section>
          <button type="button" class="btn btn-primary login-btn">Login</button>
          
        </div>
          
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>