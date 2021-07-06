<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./signin.css" />
  <link rel="stylesheet" href="../styles.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="wrapper">
    <div class="nav">
      <div class="logo">
        <a href="../homepage_view.php">
          <h4>DOTTECH</h4>
        </a>
      </div>
      <div class="links">
        <a href="./learn.php" class="mainlink">IT Knowledge</a>
        <a href="#" class="mainlink">Mentor</a>
        <a href="./Contact Us/contact.php">Contact us</a>
        <a href="../Sliding-Sign-In-Sign-Up/signin.php">Sign In</a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="./login.php" method="POST" id="sign-in-form" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <?php
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "nouser") {
              echo '<p class="loginerror">Wrong Username or Email!</p>';
            } elseif ($_GET['error'] == "wrongpassword") {
              echo '<p class="loginerror">Wrong Password!</p>';
            } elseif ($_GET['error'] == "sqlerror") {
              echo '<p class="loginerror">Please Try Again Later!</p>';
            }
          }
          ?>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username_email" id="username_email" placeholder="Username or Email" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required />
          </div>
          <button type="submit" value="Login" name="login_submit" id="login_submit" class="btn solid">Login</button>
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        <form action="./signup.php" method="POST" id="sign-up-form" class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <?php
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "invalidusernameemail") {
              echo '<p class="signuperror">Invalid Username and Email!</p>';
            } elseif ($_GET['error'] == "invalidusername") {
              echo '<p class="signuperror">Invalid Username!</p>';
            } elseif ($_GET['error'] == "invalidemail") {
              echo '<p class="signuperror">Invalid Email!</p>';
            } elseif ($_GET['error'] == "passwordcheck") {
              echo '<p class="signuperror">Your passwords do not match!</p>';
            } elseif ($_GET['error'] == "usertaken") {
              echo '<p class="signuperror">Username is already taken!</p>';
            } elseif ($_GET['error'] == "sqlerror") {
              echo '<p class="signuperror">Please Try Again Later!</p>';
            }
          }
          ?>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username" id="username" placeholder="Username" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password_repeat" id="password_repeat" placeholder="Confirm Password" required />
          </div>
          <div>
            <br>
            <input type="checkbox" class="agree-term" name="agree-term" id="agree-term" required />
            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to all the statements in <a href="terms_of_service.php" class="term-service">Terms of service</a></label>
          </div>
          <br>
          <button type="submit" name="signup_submit" id="signup_submit" class="btn" value="Sign up">Sign Up</button>
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
          <button class="btn transparent" id="sign-up-btn">Sign up</button>
        </div>
        <img src="./img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn transparent" id="sign-in-btn">Sign in</button>
        </div>
        <img src="./img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="./app.js"></script>
</body>

</html>