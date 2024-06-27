<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexstyle.css">
    <title>Document</title>
    <link rel="icon" href="g-logo.png">
    <!-- <link rel="icon" href="https://cdn-icons-png.flaticon.com/128/9956/9956310.png?uid=R100292432&track=ais"> -->

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootstrap.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="commenStyle.css">
    <link rel="stylesheet" href="indexstyle copy.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg  nav-background fixed-top w-100 p-5">
        <div class="container-fluid">
            <a class="navbar-brand active sec-1-logo ms-5" href="index.php">
                Code Ease
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars-staggered" style="color: #f2f2f2"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown" style=" ">
                <ul class="navbar-nav ms-auto fs-5 fw-bold me-3 text-center">
                    <li class="nav-item pe-3 sec-1">
                        <a class="nav-link  sec-1" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item pe-3 sec-1">
                        <a class="nav-link" href="HTML.html">HTML</a>
                    </li>

                    <li class="nav-item pe-3 sec-1">
                        <a class="nav-link" href="CSS.html">CSS</a>
                    </li>
                    <li class="nav-item pe-3 sec-1">
                        <a class="nav-link" href="js.html">JavaScript</a>

                    </li>
                    <li class="nav-item pe-3 sec-1">
                        <a class="nav-link" href="editor.html">Code Ease </a>

                    </li>
                    <li class="nav-item active pe-3 sec-1">
                        <a class="nav-link" href="login.php" style="color: #cba16b">login </a>

                    </li>
                   
                      <li class="nav-item pe-3 sec-1">
                        <a class="nav-link" href="registration.php">Sign Up</a>
            
                      </li>
                </ul>

            </div>
        </div>
    </nav>


    <div class="login">
        <?php
            require('db.php');
            session_start();

            if (isset($_POST['username'])){

            $username = $_REQUEST['username'];
            $password = ($_REQUEST['password']);
        
            $query = "SELECT * FROM `users` WHERE `username`='$username' and `password`='' + '$password'";
            $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
            $rows = mysqli_num_rows($result);
                if($rows==1){
                $_SESSION['username'] = $username;
                header("Location: index1.php");
                }else{
            echo "<div class='form'>
            <h3>Username/password is incorrect.</h3>
            <br/>Click here to <a href='index.php'>Login</a></div>";
                }
                }else{
            ?>
        <div class="form">
            <h1>Log In</h1>
            <form action="" method="post" name="login">
                <div class="input-container">
                    <input placeholder="Enter username" name="username" class="input-field" type="text">
                    <label for="input-field" class="input-label">Enter username</label>
                    <span class="input-highlight"></span>
                </div>
                <br>
                <div class="input-container">
                    <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                    <label for="input-field" class="input-label">Enter Password</label>
                    <span class="input-highlight"></span>
                </div>

                <br>
                <button id="bt" name="submit" type="submit" value="Login">Login</button>
            </form><br>
            <p>Not registered yet? <a href='registration.php'>Register Here</a></p>
        </div>
        <?php } ?>
    </div>


    <!-- Site footer -->
    <footer class="site-footer ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 ">
                    <h6><button data-text="Awesome" class="button">
                            <span class="actual-text show">&nbsp;Code&nbsp;Ease</span>
                            <span class="hover-text" aria-hidden="true">&nbsp;Code&nbsp;Ease</span>
                        </button></h6>
                    <p class="text-justify show"><i> I'M Aman kumar </i>This is a compact website template that allows
                        users to
                        easily explore new ideas and unleash their creativity. It has been specifically designed as a
                        template for
                        business purposes, providing a solid foundation for creating a professional and visually
                        appealing website.
                        Users can customize and tailor the template to suit their unique business needs, giving them the
                        flexibility
                        to showcase their products, services, and brand in an engaging way.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links show">
                        <li><a href="https://aman-kumar-2004.github.io/reponse-game-website-/" target="_blank">Gaming
                                Website</a></li>
                        <li><a href="https://aman-kumar-2004.github.io/responsive-food-website/" target="_blank">Food
                                Website </a></li>
                        <li><a href="https://ganeshdutt100.github.io/ARC_website.github.io/" target="_blank">ARC </a>
                        </li>
                        <li><a href="https://ganeshdutt100.github.io/Animation/animation_3.html"
                                target="_blank">Animated Web</a>
                        </li>
                        <li><a href="https://ganeshdutt100.github.io/Bicylce-Store/" target="_blank">bicycles</a></li>
                        <li><a href="https://ganeshdutt100.github.io/Flight-Booking-Website/">Royal Yatra</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3 show">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="HTML.html">Html</a></li>
                        <!-- <li><a href="">Services</a></li> -->
                        <li><a href="js.html">JS</a></li>
                        <li><a href="CSS.html">CSS</a></li>
                        <!-- <li><a href="#Templates">Templates</a></li> -->
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by
                        <a href="https://github.com/Aman-Kumar-2004 class=" sec-1-logo fs-5 ms-2">Aman Kumar</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 hidden">
                    <ul class="social-icons">
                        <li><a class="facebook" href="https://www.facebook.com" target="blank"><i
                                    class="fa-brands fa-facebook"></i></a></li>
                        <li><a class="dribbble" href="https://www.instagram.com/the_ganesh_dutt/"><i
                                    class="fa-brands fa-instagram" target="blank"></i></a></li>
                        <li><a class="linkedin" href="https://www.linkedin.com"><i class="fa-brands fa-linkedin"
                                    target="blank"></i></a></li>
                        <li><a class="twitter" href="https://github.com/Aman-Kumar-2004" target="blank"><i
                                    class="fa-brands fa-github"></i></a></li>

                        <li><a class="whatsapp" href="https://api.whatsapp.com/send?phone=9125289186" target="blank"><i
                                    class="fa-brands fa-whatsapp"></i></a></li>

                        <li><a class="linkedin" href="tel:+917078404837" target="blank"><i
                                    class="fa-solid fa-phone"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>
    </div>

    <div class="main-whtapp-icons">
        <div class="whatsapp-icons">
            <a href="https://api.whatsapp.com/send?phone=9125289186" target="blank">
                <img src="whatsapp_icons.png" alt="" width="70px">
            </a>
        </div>
    </div>


    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="main.js"></script>

    <script>
        let nav = document.querySelector('.nav-background');
    
    window.onscroll = function(){
      if(document.documentElement.scrollTop > 20){
        nav.classList.add('on-scroll');
      }
      else{
        nav.classList.remove('on-scroll');
    
      }
    }
    </script>
</body>

</html>