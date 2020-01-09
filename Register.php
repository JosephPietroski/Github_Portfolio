<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="My Portfolio">
  <meta name="keywords" content="web design, affordable web design, professional web design">
  <meta name="author" content="Joseph Pietroski">
  <title>Josephs Portfolio | Register</title>
  <link rel="stylesheet" href="C:\Users\Joseph JR1\OneDrive\Intergation\Portfolio\Web\My Portfolio\style.css">
  <link rel= "stylesheet" href="C:\Users\Owner\OneDrive\Intergation\Portfolio\Web\My Portfolio\style.css"
  </head>

<body>
  <header>
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">Joseph's</span> Portfolio</h1>
      </div>
      <nav>
        <ul>
          <li class="current"><a href="index.html">Home</a></li>
          <li><a href="about.html">Background</a></li>
          <li><a href="services.html">My Work</a></li>
          <li><a href="Login.php">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="Login">
    <h1>Register</h1>
    <form action="Login.php" method="POST">
      <div class="Login"><?= $_SESSION['message'] ?>  </div>
      <input type="text" placeholder="Enter Your Username" name="Username" autocomplete="on" required />
      <input type="Password" placeholder="Enter Your Password" name="Password" autocomplete="on" required />
      <input type="text" placeholder="Enter Your Email" name="email" autocomplete="on" required />


      <section>
          	<button class="progress-button" data-style="fill" data-horizontal>Sign Up</button>
      </section>


    </form>
    <footer>
      <p>Joseph's Portfolio, Copyright &copy; 2017</p>
    </footer>


</body>

</html>
