<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Code Ease</title>
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
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="commenStyle.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg  nav-background fixed-top w-100 p-5">
    <div class="container-fluid">
      <a class="navbar-brand active sec-1-logo ms-5" href="index.html">
        Code Ease
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars-staggered" style="color: #f2f2f2"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown" style=" ">
        <ul class="navbar-nav ms-auto fs-5 fw-bold me-3 text-center">
          <li class="nav-item pe-3 sec-1">
            <a class="nav-link active sec-1" aria-current="page" href="index.html" style="color: #cba16b">Home</a>
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
           <li class="nav-item pe-3 sec-1">
            <a class="nav-link" href="login.php">login </a>

          </li>
          <li class="nav-item pe-3 sec-1">
            <a class="nav-link" href="registration.php">Sign up </a>

          </li>
        </ul>

      </div>
    </div>
  </nav>

  <!-- --------------------------------------------
                   sec-2
 ------------------------------------------- -->
  <div id="home"></div>
  <div class="sec-2 position-relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12 order-1 order-lg-0 sec-2-text ">
          <div class="blurStart">
            <p class="fs-3 fw-bold text-center text-lg-start" style="color: #cba16b">
              Hello! <span class="wave">👋</span>
            </p>
            <h1 class="words fw-bold sec-1-logo text-center text-lg-start mb-3 hidden">
              Welcome to <span id="element"></span>
            </h1>

            <p class="fw-bold mb-4 hidden">
              Welcome to <bold class="fs-5">Code Ease</bold>, your one-stop destination for mastering HTML, CSS, and
              JavaScript. Dive into our intuitive platform offering comprehensive tutorials, interactive coding
              challenges, and project-based learning, empowering you to build real-world projects while
              reinforcing key concepts.
            </p>


            <!-- <p class="d-none d-lg-block">
              I am an adaptable and collaborative fresher web developer, eager
              to contribute my creative problem-solving skills and stay updated
              with the latest web development trends to deliver high-quality
              solutions.
            </p> -->


          </div>
        </div>

        <div class="col-lg-6 col-12 order-0 order-lg-12 text-center mt-5">
          <img
            src="https://img.freepik.com/free-vector/app-development-concept-with-programming-languages_23-2148688949.jpg?w=740&t=st=1713707437~exp=1713708037~hmac=49f6adb5b7699b66347823c0c3aa8dd16da4417b7036efb41421a14923f5ed43"
            alt="" class="img-fluid d-none d-lg-flex sec-2-img-1 mt-5 ms-xl-4  hidden " />

          <img
            src="https://img.freepik.com/free-vector/app-development-concept-with-programming-languages_23-2148688949.jpg?w=740&t=st=1713707437~exp=1713708037~hmac=49f6adb5b7699b66347823c0c3aa8dd16da4417b7036efb41421a14923f5ed43 "
            alt="" class="img-fluid d-lg-none sec-2-img  hidden" />
        </div>
      </div>

    </div>
  </div>
  <hr class="text-warning">

  <!-- --------------------------------------------
                              sec-3
 ------------------------------------------- -->
  <!-- <div class=" empty-div-1 mx-auto "></div> -->
  <!-- <div style="overflow:hidden; position: absolute;">
  <svg
    preserveAspectRatio="none"
    viewBox="0 0 1200 120"
    xmlns="http://www.w3.org/2000/svg"
    style="fill: #141318; width: 99vw; height: 80px;"
  >
    <path
    d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z"
    opacity=".25"
  />
    <path
      d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z"
      opacity=".5"
    />
    <path d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
  </svg>
</div> -->

  <div id="about">

    <div class="sec-3">

      <div class="container ">
        <div class="row text-white">
          <div class="col-12 d-lg-none ">
            <div class="sec-3-box hidden">
              <img
                src="https://img.freepik.com/free-photo/programming-background-with-person-working-with-codes-computer_23-2150010140.jpg?t=st=1713708834~exp=1713712434~hmac=c9f27224f8934b1123facd2da8d7c67433e702915d6e68819cc51853408b2e19&w=996"
                alt="" class="hidden">
              <div class="sec-3-box-1">
                <div class="details text-center pt-5 ">
                  <h1 class="ms-4">HTML</h1>
                  <h1 class="ms-4">CSS</h1>
                  <h1 class="ms-4">JavaScript</h1>
                  <h1 class="ms-4">Code Ease</h1>
                </div>
              </div>

            </div>
          </div>
          <div class="col-lg-5 position-relative d-none d-lg-block ms-4 mt-5">
            <div class="card hidden bg-dark text-white">
              <div class="imgBox">
                <img
                  src="https://img.freepik.com/free-photo/programming-background-with-person-working-with-codes-computer_23-2150010140.jpg?t=st=1713708834~exp=1713712434~hmac=c9f27224f8934b1123facd2da8d7c67433e702915d6e68819cc51853408b2e19&w=996"
                  alt="" class="hidden">
              </div>

              <div class="details text-center pt-5 ">
                <h1 class="ms-4">HTML</h1>
                <h1 class="ms-4">CSS</h1>
                <h1 class="ms-4">JavaScript</h1>
                <h1 class="ms-4">Code Ease</h1>
              </div>
            </div>


          </div>


          <div class="col-lg-6 col-12 mt-5 mt-lg-0">
            <h1 class="text-center mt-5 mt-lg-0 hidden" style="font-family: 'Baloo Bhaina 2', cursive;"> Why we
              need<span style="color: #cba16b;"> Code Ease</span></h1>

            <p class="mt-2 sec-3-pera mt-4 hidden">Comprehensive Understanding: Notes cover key concepts, syntax, and
              best practices, offering learners a comprehensive understanding of HTML, CSS, and JavaScript.

            <p class="mt-2 sec-3-pera mt-4 hidden">Reference Material: Learners can refer back to the notes as they work
              on projects or encounter challenges, serving as a handy reference guide.
            <p class="mt-2 sec-3-pera mt-4 hidden">Consolidation of Learning: Taking notes helps reinforce learning by
              encouraging active engagement with the material, aiding in long-term retention and understanding.
            <p class="mt-2 sec-3-pera mt-4 hidden">Clarification of Concepts: Notes can clarify complex concepts and
              provide additional explanations, helping learners grasp difficult topics more easily.
            </p>

            <p class="sec-3-pera hidden">Accessibility: Having notes available ensures that learners can access learning
              material at any time, even when they're not connected to the internet or the learning platform.</p>

            <h6 class="hidden"> <a href=""> <button data-text="Awesome" class="button mt-3">
                  <span class="actual-text">&nbsp;Know&nbsp;More</span>
                  <span class="hover-text" aria-hidden="true">&nbsp;Know&nbsp;More</span>
                </button></a>
            </h6>
          </div>
        </div>
      </div>

    </div>
  </div>


  <!-- ========== Start Section new section  ========== -->

  <div class="new-text" id="project" style="background-color: #151515; color: white;">


    <div class=" container">
      <h1 class="text-white text-center pt-5 hidden" style="font-family: 'Baloo Bhaina 2', cursive;"> Projects</span>
      </h1>
      <div class="empty-div-new-text mx-auto"></div>

      <!--Grid row-->
      <div class="row ">

        <!--Grid column-->
        <div class="col-lg-5 new-text-logo mb-4 text-center order-1 order-lg-0">

          <!-- <h2 class="hidden text-center fw-bold" style="font-family: 'Young Serif', serif;
                color: #a34d06;" > BrajYatraa.com</span></h2> -->
          <a href="https://brajyatraa.com/" target="_blank"> <img src="brajyatra-logo.png" alt="" width="300px"
              class="mt-3 hidden"></a>
          <div class="new-icons text-center ">
            <i class="fa-brands fa-html5 fa-2xl me-2 hidden" style="color: #e07015;"></i>
            <i class="fa-brands fa-bootstrap fa-2xl hidden" style="color: #8243e0;"></i>
            <i class="fa-brands fa-css3-alt fa-2xl ms-2 hidden" style="color: #4f8aef;"></i>
            <i class="fa-brands fa-js fa-2xl rounded-4 ms-2 hidden" style="color: #f8c81b;"></i>

            <!-- <div class="empty-div mx-auto"></div> -->
          </div>

          <p class="hidden mt-3 new-text-pera hidden" style="font-family: 'Young Serif', serif;">BrajYatraa.com -
            Created by me, this real-world website
            demonstrates my proficiency in web development, design, and
            content creation. It serves as a platform for Braj ki yatra information
            and package selection. The project showcases my skills in HTML,
            CSS, JavaScript, and Bootstrap. It underscores my ability to
            independently manage web development projects.
          </p>


          <a href="https://brajyatraa.com/" target="_blank" class="text-center ">
            <button class="button-sec-6 mx-auto mt-5 mt-lg-0 hidden">
              <span>Explore Now</span>
            </button>
          </a>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-7 mb-4 order-0 order-lg-1">

          <!--Image-->
          <div class="project-main hidden">
            <div class="project-section ">

              <img src="projectBrajyatraa.com (2).png" alt="">
            </div>
          </div>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->





      <!-- 2 -->


      <!--Grid row-->
      <div class="row second-new-tex-row-main">


        <!--Grid column-->
        <div class="col-lg-7 mb-4 second-new-tex-row">

          <!--Image-->
          <div class="project-main hidden">
            <div class="project-section">

              <img src="project-chnadrayaarn-3.png" alt="">
            </div>
          </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-5 new-text-logo mt-5 text-center hidden">

          <a href="https://ganeshdutt100.github.io/Mission_Chandrayaan/" target="_blank">

            <h2 class="hidden text-center fw-bold hidden" style="font-family: 'Young Serif', serif;
    color: #e7a941">
              <img src="https://ganeshdutt100.github.io/Mission_Chandrayaan/logo.png" alt="" width="70px">
              Chandraya Mission</span>
            </h2>
          </a>

          <div class="new-icons text-center ">
            <i class="fa-brands fa-html5 fa-2xl me-2 hidden" style="color: #e07015;"></i>
            <i class="fa-brands fa-bootstrap fa-2xl hidden" style="color: #8243e0;"></i>
            <i class="fa-brands fa-css3-alt fa-2xl ms-2 hidden" style="color: #4f8aef;"></i>
            <i class="fa-brands fa-js fa-2xl rounded-4 ms-2 hidden" style="color: #f8c81b;"></i>

            <!-- <div class="empty-div mx-auto"></div> -->
          </div>

          <p class="hidden mt-3 new-text-pera hidden hidden" style="font-family: 'Young Serif', serif;">
            ChandrayaanMission - Conceptualized and developed by me, this website highlights my expertise in web
            development, design, and content creation. Serving as an informative hub for Chandrayaan mission updates and
            resources, it reflects my proficiency in HTML, CSS, JavaScript, and Bootstrap. This project underscores my
            capability to independently lead and execute web development ventures.
          </p>


          <a href="https://ganeshdutt100.github.io/Mission_Chandrayaan/" target="_blank" class="text-center ">
            <button class="button-sec-6 mx-auto mt-5 mt-lg-0 hidden hidden">
              <span>Explore Now</span>
            </button>
          </a>

        </div>
        <!--Grid column-->



      </div>
      <div class="pb-4 mt-5 mt-lg-0">
        <a href="#">
          <button class="new-text-btn mx-auto hidden">
            <div class=".svg-wrapper-new-text-1">
              <div class=".svg-wrapper-new-text">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path fill="currentColor"
                    d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z">
                  </path>
                </svg>
              </div>
            </div>
            <span>View all Projects</span>
          </button>
        </a>
      </div>
      <!--Grid row-->


    </div>


  </div>
  <!-- ========== End Section new section  ========== -->






  <!-- achievement-cirtificate -->

  <!-- --------------------------------------------
                              sec-4
 ------------------------------------------- -->
  <div class=" empty-div-1 mx-auto " style="margin-top: 100px;"></div>

  <div id="services style">
    <div class="sec-4 ">

      <div class="container">

        <h1 class="text-white text-center mt-4 hidden" style="font-family: 'Baloo Bhaina 2', cursive;">MY <span
            style="color: #cba16b;"> SERVISES </span></h1>
        <div class="col-12 empty-div mx-auto "></div>
        <div class="row mt-5">
          <div class="col-lg-4 col-12 col-md-6 mt-5 mt-lg-0 text-center mx-auto ">
            <div class="container-sec-4  ">
              <div class="box mx-auto mx-lg-0">
                <img src="developer2.png" class="mx-auto hidden" alt="" width="30%">
                <span class="title hidden">Web Development</span>
                <div>

                  <p class="hidden">Web development is the art of creating functional and visually appealing websites
                    using coding languages such as HTML, CSS, and JavaScript.</p>

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12  col-md-6 text-center mt-5 mt-lg-0">
            <div class="container-sec-4">
              <div class="box mx-auto mx-lg-0">
                <img src="developer.webp" class="mx-auto hidden" alt="" width="30%">
                <span class="title hidden">Clean Code</span>
                <div>

                  <p class="hidden">Clean code is a fundamental principle in web development that emphasizes writing
                    code that is easy to understand, maintain, and free from unnecessary complexity.</p>

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12 text-center mt-5 mt-lg-0">
            <div class="container-sec-4">
              <div class="box mx-auto mx-lg-0">
                <img src="developer3.webp" class="mx-auto hidden" alt="" width="30%">
                <span class="title hidden">
                  Responsive design
                </span>
                <div>

                  <p class="hidden">
                    We check the responsiveness of the web and verify its availability across all screen sizes. We also
                    maintain a simple UI to ensure user satisfaction.</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>




  <!-- --------------------------------------------
                              sec-6
 ------------------------------------------- -->




  <!-- form -->
  .<!-- --------------------------------------------
                       sec-7
 ------------------------------------------- -->
  <!-- <div class=" empty-div-1 mx-auto "></div> -->
  <div id="contact"></div>
  <div class="sec-7 ">
    <div class="container">
      <h1 class="text-white text-center my-4 hidden" style="font-family: 'Baloo Bhaina 2', cursive;">CONTACT <span
          style="color: #cba16b;"> US </span></h1>
      <div class="col-12 empty-div mx-auto "></div>


      <div class="row">
        <div class="col-12 col-lg-6 ">
          <img src="http://127.0.0.1:5502/cantact-girls.png" alt="" class="new-add-sec-7-img d-lg-none img-fluid">
          <img src="http://127.0.0.1:5502/cantact-girls.png" alt="" class="new-add-sec-7-img d-none d-lg-block">

        </div>

        <div class="col-lg-6 col-12 mt-5 mt-lg-0 contact-page py-4 hidden">
          <form style="width: 75%;" class="ms-5 mt-lg-5 pt-lg-5">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-white hidden">Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Aman Kumar">

            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="aman@gmail.com">

            </div>
            <div class="mb-3">
              <label class="form-label text-white">Number</label>
              <input type="tel" class="form-control" placeholder="+91 7078-4048-37">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label text-white" for="exampleCheck1">Check me out</label>
            </div>

            <a href="#" onclick="fun()" class="text-decoration-none ">
              <div class="btn button-sec-7 type1"> View Work </div>
            </a>

            <!-- <a href="contact.html"> <button type="submit" class="btn  button-sec-7 type1">Submit</button></a>  -->
          </form>
        </div>

        <script>
          function fun() {
            alert("Data submitted")
          }
        </script>



      </div>
    </div>

  </div>


  <!-- --------------------------------------------
                              sec-5
 ------------------------------------------- -->

  <div class="sec-5 position-relative">


    <div class="container">

      <div class="row text-center py-5  ">


      </div>
    </div>
    <div class="box-2  w-100 h-100 position-absolute top-0 text-center"
      style="background-color: #2221207e;  padding-top: 100px ;">
      <h1 style="color: white ">I Am Available For Freelancer !</h1>
      <a href="">
        <div class="btn sec-2-btn px-5 py-2  mt-4 fw-bold">Hire ! <img src="n-go-1.gif" alt="" width="40px"></div>
      </a>
    </div>

  </div>
  <!-- <div class=" empty-div-1 mx-auto "></div> -->

  <!-- footer -->
  <!-- sec-14 -->

  <!-- Site footer -->
  <footer class="site-footer ">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 ">
          <h6><button data-text="Awesome" class="button">
              <span class="actual-text hidden">&nbsp;Code&nbsp;Ease</span>
              <span class="hover-text" aria-hidden="true">&nbsp;Code&nbsp;Ease</span>
            </button></h6>
          <p class="text-justify hidden"><i> I'M Aman kumar </i>This is a compact website template that allows users to
            easily explore new ideas and unleash their creativity. It has been specifically designed as a template for
            business purposes, providing a solid foundation for creating a professional and visually appealing website.
            Users can customize and tailor the template to suit their unique business needs, giving them the flexibility
            to showcase their products, services, and brand in an engaging way.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links hidden">
            <li><a href="https://aman-kumar-2004.github.io/reponse-game-website-/" target="_blank">Gaming Website</a></li>
            <li><a href="https://aman-kumar-2004.github.io/responsive-food-website/" target="_blank">Food Website </a></li>
            <li><a href="https://ganeshdutt100.github.io/ARC_website.github.io/" target="_blank">ARC </a></li>
            <li><a href="https://ganeshdutt100.github.io/Animation/animation_3.html" target="_blank">Animated Web</a>
            </li>
            <li><a href="https://ganeshdutt100.github.io/Bicylce-Store/" target="_blank">bicycles</a></li>
            <li><a href="https://ganeshdutt100.github.io/Flight-Booking-Website/">Royal Yatra</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3 hidden">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="About.html">About</a></li>
            <!-- <li><a href="">Services</a></li> -->
            <li><a href="#project">Projects</a></li>
            <li><a href="#contact">Contact us</a></li>
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
            <a href="https://github.com/Aman-Kumar-2004 class="sec-1-logo fs-5 ms-2">Aman Kumar</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12 hidden">
          <ul class="social-icons">
            <li><a class="facebook" href="https://www.facebook.com" target="blank"><i
                  class="fa-brands fa-facebook"></i></a></li>
            <li><a class="dribbble" href="https://www.instagram.com/the_ganesh_dutt/"><i class="fa-brands fa-instagram"
                  target="blank"></i></a></li>
            <li><a class="linkedin" href="https://www.linkedin.com"><i
                  class="fa-brands fa-linkedin" target="blank"></i></a></li>
            <li><a class="twitter" href="https://github.com/Aman-Kumar-2004" target="blank"><i
                  class="fa-brands fa-github"></i></a></li>

            <li><a class="whatsapp" href="https://api.whatsapp.com/send?phone=9125289186" target="blank"><i
                  class="fa-brands fa-whatsapp"></i></a></li>

            <li><a class="linkedin" href="tel:+917078404837" target="blank"><i class="fa-solid fa-phone"></i></a></li>
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
  <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script> -->
  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
  <script src="main.js"></script>
  <script>

  </script>
</body>

</html>