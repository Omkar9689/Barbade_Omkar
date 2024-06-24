<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Algorithm Visualizer</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <style>
        html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .nav
        {
         background-color: lightseagreen;
         width:100%;
         height: 30px;
         font-weight: 700;
         padding: 25px 0 0 0;
         display: flex;
         justify-content: center;
         align-items: center;
         gap: 30px;
         color: white;
        }

      .nav .home
      {
         text-decoration: none;
      }

      .nav .help
      {
         text-decoration: none;
      }

      .nav .about
      {
         text-decoration: none;
      }

      .nav .register
      {
         text-decoration: none;
      }
       
      .nav .login
      {
         text-decoration: none;
      }

      .nav .home:hover
      {
         text-decoration: underline;
         color: white;
      }

      .nav .help:hover
      {
         text-decoration: underline;
         color: white;
      }
      
      .nav .about:hover
      {
         text-decoration: underline;
         color: white;
      }

      .nav .register:hover
      {
         text-decoration: underline;
         color: white;
      }

      .nav .login:hover
      {
         text-decoration: underline;
         color: white;
      }

      header {
            min-height: 300px;
            background-color: lightseagreen;
            color: white;
            text-align: center;
            padding: 50px 0;
        }

        .container {
            display: flex;
            justify-content: space-around; /* Equal space between the panels */
            align-items: flex-start;
            padding: 20px;
        }

        .panel {
            flex: 1;
            background-color: #FFE4C4;
            border-radius: 5px;
            margin: 10px;
            padding: 20px;
            width: 40%; /* Adjusted width for the panels */
            max-width: 300px; /* Maximum width to ensure */
        }

        .container {
            display: flex;
            justify-content: space-around; /* Equal space between the panels */
            align-items: flex-start;
            padding: 20px;
        }

        .panel {
            flex: 1;
            background-color: #FFE4C4;
            border-radius: 5px;
            margin: 10px;
            padding: 20px;
            width: 40%; /* Adjusted width for the panels */
            max-width: 300px; /* Maximum width to ensure proper display */
            min-width: 200px; /* Minimum width to avoid overcrowding */
            text-align: center;
        }

        .panel h2 {
            text-align: center;
        }

        .panel button {
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .panel button:hover
        {
         background-color:white;
         color:#333;
         border:2px solid #333;
        }

        footer
        {
         color: white;
         width: 100%;
         height: 100px;
         background-color: #333;
         display: flex;
         text-align: center;
         justify-content: center;
         align-items: center;
         gap: 20px;;
        }

    </style>
</head>
<body>
<div class="nav">
    <a href="Home.html" class="home">Home</a>
    <a href="Help.html" class="help">Help</a>
    <a href="About.html" class="about">About</a>
    <a href="register.php" class="register">Register</a>
    <a href="login.php" class="login">Login</a>
</div>
<!-- Header -->
<header>
    <h4>Enjoy the new way of studying algorithms</h4>
    <h1 class="w3-xxxlarge w3-animate-bottom" style="font-size: 24px;">Algorithm Visualizer</h1>
    <h4>Choose from below algorithms to get started</h4>
</header>
<div class="container">
    <div class="panel">
        <h2>Sorting Visualization</h2>
        <button onclick="visualizeSorting()">Visualize Sorting</button>
    </div>
    <div class="panel">
        <h2>Searching Visualization</h2>
        <button onclick="visualizeSearching()">Visualize Searching</button>
    </div>
</div>
<footer>
    <h3><b>Made by Fartale Soham &sol;Warkhede Abhijeet &sol;Barbade Omkar</b></h3>
    <h4><b>TYBSC(CS) Project</b></h4>
</footer>
<script>
    function visualizeSorting() {
        // Set the new URL for Page 2
        window.location.href = 'sorting.html';
    }

    function visualizeSearching() {
        // Set the new URL for Page 2
        window.location.href = 'searching.html';
    }
</script>
</body>
</html>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>