<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/boxicons.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/footer.css" rel="stylesheet">

    <title>About Us</title>
</head>
<body class="bg-light">
   <!-- nav -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top text-white">
    <div class="container-fluid d-flex justify-content-between">
      <div class="d-flex justify-content-sm-between">
        <a class="navbar-brand px-4" href="#">Job Finder</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{route('index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('jobs')}}">Jobs</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="{{route('services')}}">Services</a>
          </li>
           <li class="nav-item">
            <a class="nav-link active" href="{{route('about')}}">About us</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="{{route('connect')}}">Connect Us</a>
          </li>
           <li class="nav-item">
            <a class="nav-link " href="{{route('companies')}}">Companies</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="../user/{{route('member')}}">{{route('member')}}s</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ar</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profile 
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ModalForm">LogIn</a></li>
              <li><a class="dropdown-item" href="#"data-bs-toggle="modal" data-bs-target="#SignForm">Sign Up</a></li>
            </ul>
          </li>
        
        </ul>
      </div>
    </div>
  </nav>


   <!-- LogIn Modal -->
  <section class="modal fade" id="ModalForm" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <!-- Login Form -->
          <form action="">
            <div class="modal-header">
              <h5 class="modal-title">Login Form</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                  <label for="Username">Username<span class="text-danger">*</span></label>
                  <input type="text" name="username" class="form-control" id="Username" placeholder="Enter Username">
              </div>

              <div class="mb-3">
                  <label for="Password">Password<span class="text-danger">*</span></label>
                  <input type="password" name="password" class="form-control" id="Password" placeholder="Enter Password">
              </div>
              <div class="mb-3">
                  <input class="form-check-input" type="checkbox" value="" id="re{{route('member')}}" required>
                  <label class="form-check-label" for="re{{route('member')}}">Re{{route('member')}} Me</label>
                  <a href="#" class="float-end">Forgot Password</a>
              </div>
            </div>
            <div class="modal-footer pt-4">                  
              <a href="../user/profile.html" type="button" class="btn btn-dark mx-auto w-100">Login</a>
            </div>
            <p class="text-center">Not yet account, <a href="#" data-bs-toggle="modal" data-bs-target="#SignForm"
            data-bs-dismiss="modal" >Signup</a></p> 
        </form>
      </div>
    </div>
  </section>

  <!-- sign up Modal -->
  <section class="container">
    <div class="modal fade" id="SignForm" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="" class="mt-5 border p-4 bg-light shadow">
                <div class="modal-header">
                  <h5 class="modal-title">Create Your Account</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label>First Name<span class="text-danger">*</span></label>
                        <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label>Last Name<span class="text-danger">*</span></label>
                        <input type="text" name="Lname" class="form-control" placeholder="Enter Last Name">
                    </div>

                      <div class="mb-3 col-md-12">
                          <label>Password<span class="text-danger">*</span></label>
                          <input type="password" name="password" class="form-control" placeholder="Enter Password">
                      </div>
                      <div class="mb-3 col-md-12">
                          <label>Confirm Password<span class="text-danger">*</span></label>
                          <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
                      </div>
                      <div class="col-md-12">
                          <a href="../user/profile.html" type="button"
                          class="btn btn-dark mx-auto w-100">Signup Now</a>
                  </div>
              </div>
            </form>
            <p class="text-center mt-3 text-secondary">If you have account, Please <a href="#" data-bs-toggle="modal" data-bs-target="#ModalForm"data-bs-dismiss="modal">Login Now</a></p>

          </div>
      </div>
    </div>
  </section>
    
    <!-- About-->
    <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../assets/img{{route('about')}}/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../assets/img{{route('about')}}/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../assets/img{{route('about')}}/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2015</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../assets/img{{route('about')}}/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2020</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
    </section>
    
    <!-- Footer -->
    <footer id="footer">
    <div class="footer-newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post"> <input type="email" name="email"><input type="submit" value="Subscribe"> </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li> -->
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Jobs</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Companies</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p> Almasbah Street <br> Taiz<br> Yemen <br> <strong>Phone:</strong> +7 777 777 777<br> <strong>Email:</strong> job@gmail.com<br> </p>
                </div>
                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>About Job Finder</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse recusandae numquam nihil dolores iusto qui molestiae, incidunt nam unde. </p>
                    <div class="social-links mt-3"> <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright"> © Copyright <strong><span>Job Finder</span></strong>. All Rights Reserved </div>
        <div class="credits"> Designed by <a href="#" class="btn-outline-dark text-white">Hadeel Jameel</a> </div>
    </div>
    </footer>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.min.js"></script>
        
</body>
</html>