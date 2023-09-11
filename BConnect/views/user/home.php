<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Accueil</title>
  <!-- External CSS libraries -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/home.css">
  <script src="assets/js/home.js" defer></script>
</head>
<body>
<video autoplay muted loop id="video-background">
  <source src="assets/images/img/videobackground.mp4" type="video/mp4">
</video>
<div class="contain">
  <div class="row">
    <div class="col-12 col-md-12 col-lg-5">
      <div class="wrapper">
        <div class="form-box login">
          <h2>Login</h2>
          <form class="" action="" method="post">
            <div class="input-box">
              <span class="icon"><ion-icon name="mail"></ion-icon></span>
              <input type="email" name="email" required>
              <label for="email">Email</label>
            </div>
            <div class="input-box">
              <span id="toggle-btn" class="icon" onclick="togglePasswordVisibility()" >
                <ion-icon name="eye"></ion-icon>
              </span>
              <input type="password" name="password"  id="password" required>
              <label for="password">Password</label>
            </div>
            <div class="remember-forgot">
              <label for="remember"><input type="checkbox" name="check">Remember</label>
              <a href="reset-password.html">Forgot Password ?</a>
            </div>
            <button type="submit" name="signin" class="btn">Login</button>
            <div class="login-register">
              <p>Don't have an account ?
                <a href="#" class="register-link">Register</a>
              </p>
            </div>
          </form>
        </div>
        <div class="form-box register">
          <h2>Registration</h2>
          <form class="" action="" method="post" enctype="multipart/form-data">
            <div class="input-box">
              <span class="icon"><ion-icon name="person"></ion-icon></span>
              <input type="text" name="lastName" required>
              <label for="lastName">Nom</label>
            </div>
            <div class="input-box">
              <span class="icon"><ion-icon name="person"></ion-icon></span>
              <input type="text" name="firstName" required>
              <label for="firstName">Prenom</label>
            </div>
            <div class="input-box">
              <span class="icon"><ion-icon name="mail"></ion-icon></span>
              <input type="email" name="email" required>
              <label for="email">Email</label>
            </div>
            <div class="input-box">
              <span id="toggle-btn-register" class="icon" onclick="togglePasswordRegisterVisibility()" >
                <ion-icon name="eye"></ion-icon>
              </span>
              <input type="password" name="password"  id="registerPassword" required>
              <label for="password">Password</label>
            </div>

            <div class="remember-forgot">
              <label for="remember"><input type="checkbox" name="check" required>
                I accept the Terms and Conditions
              </label>
            </div>
            <div class="choose-profile">
                <input type="file" required id="input-file" name="profilePicture">
                <label for="input-file" class="icon-img">
                    <ion-icon name="images-outline"></ion-icon>
                </label>
                <img src="assets/images/img/mini-logo.png" alt="" class="img-choosed" id="img-choosed">
            </div>
            <button type="submit" name="signup" class="btn">Register</button>
            <div class="login-register">
              <p>Already have an account ?
                <a href="#" class="login-link">Login</a>
              </p>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</body>
</html>
