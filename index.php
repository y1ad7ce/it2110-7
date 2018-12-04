<?php
include("resources/header.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Group 7</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="homepage.js"></script>
  </head>

  <header>
<ul id="homebar">
      <li><a href="index.php"> HOME </a></li>
      <div class="right">
        <?php
          if(isset($_SESSION['username']) && !is_null($_SESSION['username'])){
            echo "<li><a href=\"login/logout.php\"> LOG OUT </a></li>";
            echo "<li><a href=\"user_profile_page/user_profile_view.php\"> " . $_SESSION['firstName'] . " </a></li>";
          } else {
            echo "<li><a href=\"login/login.php\"> LOGIN </a></li>";
          }
        ?>
      </div>
    </ul>
  </header>

  <body>
    <!-- Slideshow container -->
    <div class="slideshow-container">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="coding.jpeg" style="width:100%">
        <div class="text">Coders</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="car.jpg" style="width:100%">
        <div class="text">Car Enthusiasts</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="mic.jpg" style="width:100%">
        <div class="text">Musicians</div>
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
    <!-- Search -->
    <div id="container">

      <div id="search">

        <div id="button_box">
          <form class="form-wrapper-2 cf">
            <input type="text" id="inSearchBox" placeholder="Search..." required>
            <button type="submit">Go</button>
          </form>
        </div>
        <div id="checkboxes">
          <input type="checkbox" id="search_solos" class="checkboxss" name="search_solos" value="Solos">
          <label for="search_solos">Solos</label>

          <input type="checkbox" id="search_groups" class="checkboxss" name="search_groups" value="Groups">
          <label for="search_groups">Groups</label>
          <?php
            if(isset($_POST))
          ?>
        </div>
      </div>

    </div>
    <?php
    echo '<div id ="footer-container">
            <footer>
                <table id="footer-organization">
                          <tr>	
                            <th>
                                <a id="git-icon" href="https://github.com/hhy4285/it2110-2.git" target="blank">
                        <img src="resources/github-icon.png" alt="Github" />
                            </a>
                        </th>			
                        <th><a href="index.php">Home</a></th>
                        <th><a href="user_profile_page/user_profile_view.php">My Profile</a></th>
                        <th><a href="group_profile_page/group_profile.php">My Group</a></th>
                          </tr>
                        </table>
                    <p>© Copyright 2018, RPI | Group 7</p>
            </footer>
        </div>';
    ?>
  </body>

</html>