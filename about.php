<?php include "./include/header.php"?>


    <!-- Navbar for mobile screen -->
    <div class="navbar-mobile sticky-bar d-block d-sm-none">
        <div class="container-fluid">
            <div class="menu-toggler">
                <div class="hamburger-menu">
                    <a href="#">
                        <span>Menu</span>
                    </a>
                </div>
            </div>
            <div class="divider"></div>
            <div class="logo">
                <a href="#"><img src="assets/img/logos/logo_1.png" alt="logo" class="img-fluid"></a>
            </div>
            <div class="divider"></div>
            <div class="language">
                <div class="dropdown">
                    <button class="active" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img class="flag" src="assets/img/icons/Flags/united-kingdom.png" alt="cuntry flag" />
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button"><img src="assets/img/icons/Flags/france.png"
                                alt="flag image" class="flag" /></button>
                        <button class="dropdown-item" type="button"><img src="assets/img/icons/Flags/germany.png"
                                alt="flag image" class="flag" /></button>
                        <button class="dropdown-item" type="button"><img src="assets/img/icons/Flags/japan.png"
                                alt="flag image" class="flag" /></button>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="search">
                <i class="flaticon-search"></i>
            </div>
        </div>

        <div class="nav-menu-items">
            <ul class="nav-items">
                <li><a href="sign-in.html">Login/Sign up</a></li>
                <li class="menu-item-has-children"><a href="index-2.html">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index-2.html">Homepage 1</a></li>
                        <li><a href="index-3.html">Homepage 2</a></li>
                        <li><a href="index-4.html">Homepage 3</a></li>
                        <li><a href="index-5.html">Homepage 4</a></li>
                        <li><a href="index-6.html">Homepage 5</a></li>
                    </ul>
                </li>
                <li><a href="about.html" class="current-menu-item">About</a></li>
                <li class="menu-item-has-children"><a href="#">Courses</a>
                    <ul class="sub-menu">
                        <li><a href="courses.html">Courses Style 1</a></li>
                        <li><a href="all-courses.html">Courses Style 2</a></li>
                        <li><a href="course-detail.html">Course Detail</a></li>
                        <li><a href="enrollment.html">Enrollment</a></li>
                        <li><a href="join.html">Join Us</a></li>
                        <li><a href="teacher.html">Single Instructor</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-detail.html">Blog Detail</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Events</a>
                    <ul class="sub-menu">
                        <li><a href="event.html">Events</a></li>
                        <li><a href="event-detail.html">Event Detail</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="404.html">404</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="coming-soon.html">Coming soon</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-no-child"><a href="contact.html">Contact</a></li>
                <li class="menu-item-has-children">
                  <a href="#">UI Elements</a>
                  <ul class="sub-menu">
                      <li><a href="Typography-UI.html">Typography</a></li>
                      <li><a href="accordions.html">Accordion</a></li>
                      <li><a href="Button-UI.html">Button</a></li>
                      <li><a href="Icons.html">Icons</a></li>
                      <li><a href="Tables-UI.html">Tables</a></li>
                      <li><a href="Forms-UI.html">Forms</a></li>
                      <li><a href="Alerts%26Cookies-UI.html">Alerts & Cookies</a>
                      <li><a href="Model-UI.html">Model</a></li>
                      <li><a href="Pagination-UI.html">Pagination</a></li>
                      <li><a href="breadcrub.html">Breadcrumb</a></li>
                      <li><a href="Footer-UI.html">Footer</a></li>
                      <li><a href="Countdowns%26Menus-UI.html">Countdowns & Menus</a></li>
                      <li><a href="Card-UI.html">Card</a></li>
                      <li><a href="Popover%26Lists-UI.html">Popover&List</a></li>
                  </ul>
              </li>
            </ul>
        </div>

        <div class="mobile-search-wrapper">
            <form>
                <input type="text" placeholder="Type something to start">
            </form>
        </div>
    </div>

  <!-- Breadcrumb -->
  <div class="breadcrub-style-1 section">
    <div class="row d-flex align-items-center">
      <div class="col-12 col-lg-8 bg-img"
        style="background-image: url(assets/img/University/About-us-1/breadcrumb_bg.png)"></div>
      <div class="hide-md-and-down col-4 bg-color"></div>
    </div>
    <div class="heading text-center">
      <h1>About us</h1>
      <div class="breadcrub-style">
        <a href="#">Home</a>
        <span class="arrow"> > </span>
        <a href="#" class="active">About us</a>
      </div>
    </div>
  </div>

  <!-- mission&vision -->
  <div class="mission-vision section">
    <!-- Side form icons -->
    <div class="fixed-right side-form-icons">
      <i class="fas fa-phone icon" id="open-opening-popup"></i>
      <i class="fas fa-map-marker-alt icon" id="open-location-popup"></i>
      <i class="fas fa-envelope icon" id="open-form-popup"></i>
    </div>
    <!-- mantra -->
    <div class="mantra section">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8 content">
            <h2>We help people of all nationality realise their dream.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue.
              Praesent cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac. Mauris ac
              tristique nulla. In hac habitasse platea dictumst. In ultrices pulvinar imperdiet. Vivamus ut dui urna.
              Aenean lacinia ut nisi vel dapibus. Donec id elit vehicula velit vulputate dignissim.</p>
          </div>
          <div class="col-12 col-lg-4 media">
            <!-- Media BG Goes Here -->
            <img class="img-fluid" src="assets/img/University/About-us-1/video_bg.png"
              alt="martra media" />

            <!-- video popup toggler -->
            <button id="open-video-popup" class="d-flex justify-content-center align-items-center halfway-btn">
                <i class="flaticon-play-button"></i>
              </button>
          </div>

        </div>

      </div>
    </div>

    <!-- video popup -->
    <div class="video-popup">
        <div class="video-popup-wrapper">
          <div class="v-container">
            <div class="close-popup">
              <i class="fas fa-times"></i>
            </div>
            <video src="assets/img/videos/university.mp4" id="myVideo"></video>
            <div class="video-bar">
              <div class="passed"></div>
            </div>
            <div class="buttons">
              <button id="play-pause">
                <i class="fas fa-play"></i>
              </button>
              <button id="sound-toggler">
                <i class="fas fa-volume-up"></i>
              </button>
              <button id="share-toggler">
                <i class="fas fa-share-alt"></i>
              </button>
            </div>
            <div class="share">
              <div class="social-icons">
                <a target="_blank" href="#"><i class="fab fa-facebook-square"></i></a>
                <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Mission -->
    <div class="mission-section section">
      <div class="container text-center">
        <h2 class="margin-bottom-50">Our mission</h2>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue.
            Praesent
            cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac. Mauris ac tristique
            nulla. In hac habitasse platea dictumst. In ultrices pulvinar imperdiet. Vivamus ut dui urna. Aenean lacinia
            ut nisi vel dapibus. Donec id elit vehicula velit vulputate dignissim. Pellentesque erat ipsum, malesuada et
            arcu quis,</p>
          <p>condimentum lacinia tortor. Integer quis justo eget libero sollicitudin ultrices. Nulla sit amet nisl vel
            sem
            accumsan tempor non egestas lectus. Vivamus bibendum mollis ipsum, sit amet viverra dui condimentum nec.
            Curabitur vestibulum imperdiet molestie. Curabitur bibendum commodo mi et auctor. Pellentesque laoreet
            elementum ligula, ac ornare augue dignissim nec. Phasellus finibus, nunc cursus vestibulum condimentum,
            libero
            risus pharetra orci, eu luctus orci eros ac lorem. In id venenatis arcu. Morbi a lacus non risus hendrerit
            facilisis.</p>
        </div>
      </div>
    </div>

    <!-- Values -->
    <div class="values-section section">
      <div class="container">
        <h2 class="text-center margin-bottom-50">Our values</h2>
        <div class="top-content">
          <div class="row">
            <div class="col-12 col-lg-6 media">
              <img src="assets/img/University/About-us-1/writing.png" alt="media image" class="img-fluid" />
            </div>
            <div class="col-12 col-lg-6 content">
              <p>Lorem ipsum metus at congue. Lorem ipsum dolor sit amet. Praesent cursus a ante ut facilisis. Morbi
                iaculis dolor purus, auctor porta dolor gravida ac. Mauris ac tristique nulla. In hac habitasse platea
                dictumst. In ultrices pulvinar imperdiet. Vivamus ut dui urna. Aenean lacinia ut nisi vel dapibus. Donec
                id elit vehicula velit vulputate dignissim.</p>
              <p> Pellentesque erat ipsum, libero sollicitudin ultrices. Nulla sit amet nisl vel sem accumsan Lorem
                ipsum
                dolor sit amet, consectetur adipisicing. tempor non egestas lectus. Vivamus bibendum mollis ipsum, sit
                amet viverra dui condimentum nec. Curabitur vestibulum imperdiet molestie. Curabitur bibendum commodo mi
                et auctor. Pellentesque laoreet elementum ligula, ac ornare augue dignissim nec.</p>
            </div>
          </div>
        </div>
        <div class="bottom-content">
          <div class="row">
            <div class="col-12 col-lg-6 content">
              <h2 class="margin-bottom-50">Our values are what make us stand out</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue.
                Praesent cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac.</p>
            </div>
            <div class="col-12 col-lg-6">
              <div class="progress-bars">
                <div class="single-progress-item">
                  <div class="item-1">
                    <p class="title">Lorem ipsum dolor sit amet.</p>
                    <div class="pro-bar htmlprogress-1"></div>
                  </div>
                  <div class="item-2">
                    <p class="title">Lorem ipsum dolor sit amet.</p>
                    <div class="pro-bar htmlprogress-2"></div>
                  </div>
                  <div class="item-3">
                    <p class="title">Lorem ipsum dolor sit amet.</p>
                    <div class="pro-bar htmlprogress-3"></div>
                  </div>
                  <div class="item-4">
                    <p class="title">Lorem ipsum dolor sit amet.</p>
                    <div class="pro-bar htmlprogress-4"></div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Vision -->
    <div class="vision-section section">
      <div class="container text-center">
        <h2 class="margin-bottom-50">Our vision</h2>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue.
            Praesent
            cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac. Mauris ac tristique
            nulla. In hac habitasse platea dictumst. In ultrices pulvinar imperdiet. Vivamus ut dui urna. Aenean lacinia
            ut nisi vel dapibus. Donec id elit vehicula velit vulputate dignissim. Pellentesque erat ipsum, malesuada et
            arcu quis,</p>
          <p>condimentum lacinia tortor. Integer quis justo eget libero sollicitudin ultrices. Nulla sit amet nisl vel
            sem
            accumsan tempor non egestas lectus. Vivamus bibendum mollis ipsum, sit amet viverra dui condimentum nec.
            Curabitur vestibulum imperdiet molestie. Curabitur bibendum commodo mi et auctor. Pellentesque laoreet
            elementum ligula, ac ornare augue dignissim nec. Phasellus finibus, nunc cursus vestibulum condimentum,
            libero
            risus pharetra orci, eu luctus orci eros ac lorem. In id venenatis arcu. Morbi a lacus non risus hendrerit
            facilisis.</p>
        </div>
      </div>
    </div>
  </div>

    <!-- Popup -->
    <div class="side-form-popup">
        <div class="popup-wrapper">
            <div class="center-popup">
                    <div class="opening-popup">
                            <div class="close-popup">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-8 media">
                                    <img src="assets/img/University/students/adolescent-adorable-alone.png" alt="media"
                                        class="img-fluid">
                                </div>
                                <div class="col-md-6 col-lg-4 content">
                                    <h5>Opening hours</h5>
                                    <div class="openings">
                                        <div class="opening opening-days">
                                            <p class="day">Monday</p>
                                            <div class="divider"></div>
                                            <p class="day">Friday</p>
                                        </div>
                                        <div class="opening opening-time">
                                            <p class="time">08.00 am</p>
                                            <div class="divider"></div>
                                            <p class="time">16.00 pm</p>
                                        </div>
                                    </div>
                                    <p class="num">+24 45 15 62 129</p>
                                </div>
                            </div>
                        </div>
                        <div class="location-popup">
                            <div class="close-popup">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-8 media">
                                    <div id="location-map"></div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 content">
                                    <h5>Address</h5>
                                    <p class="address">2, Ave Manchester, Lorem ipsum St, Rio Danubin</p>
                                    <button class="main-btn">Open in Maps</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-popup">
                            <div class="close-popup">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-7 content">
                                    <h4>You have a question for us?</h4>
                                    <p>leave your message below or email us at info@bantinguniversity.com</p>
                                    <form class="text-left form-style-2">
                                        <div class="form-group required">
                                            <label for="email">Email address</label>
                                            <input type="email" id="email" class="form-control" name="email"
                                                placeholder="johnLP12@gmail.com" />
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <input type="text" id="message" class="form-control" name="name"
                                                placeholder="Hello, I wanted to know about this particular course called..." />
                                            <span class="small-text">120 characters left</span>
                                        </div>
                                        <button class="main-btn" type="submit">Send message</button>
                                    </form>
                                </div>
                                <div class="d-none d-lg-block col-lg-5 media">
                                    <img src="assets/img/University/Coming_soon/ambar-simpang.png"
                                        alt="media image" class="img-fluid" />
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>

  <!-- Teachers Section -->
  <div class="teachers-section section">
    <div class="container">
      <h2 class="text-center margin-bottom-50">Our teachers</h2>
      <p class="margin-bottom-50">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet
        consectetur adipisicing
        elit. Dolorem, rem! Nobis rerum aliquam vel. Earum porro culpa quis omnis nostrum ipsum necessitatibus?</p>
      <div class="teachers-carousel-wrap">
        <div class="text-center teachers-carousel">
          <div class="single-teacher-item">
            <div class="thumb">
              <img src="assets/img/University/About-us-1/teacher_2.png" alt="">
              <div class="hover">
                <span class="plus"><i class="fas fa-plus-circle"></i></span>
                <div class="hover-inner">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue.
                    Praesent cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac. Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue. Praesent
                    cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac.</p>
                </div>
              </div>
            </div>
            <div class="content">
              <h4 class="name">Elena Marie Clair</h4>
              <span class="designation">Project Management</span>
              <div class="social-icons">
                <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="single-teacher-item">
            <div class="thumb">
              <img src="assets/img/University/About-us-1/teacher_3.png" alt="">
              <div class="hover">
                <span class="plus"><i class="fas fa-plus-circle"></i></span>
                <div class="hover-inner">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue.
                    Praesent cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac. Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue. Praesent
                    cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac.</p>
                </div>
              </div>
            </div>
            <div class="content">
              <h4 class="name">Elena Marie Clair</h4>
              <span class="designation">Project Management</span>
              <div class="social-icons">
                <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="single-teacher-item">
            <div class="thumb">
              <img src="assets/img/University/About-us-1/teacher_1.png" alt="">
              <div class="hover">
                <span class="plus"><i class="fas fa-plus-circle"></i></span>
                <div class="hover-inner">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue.
                    Praesent cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac. Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue. Praesent
                    cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac.</p>
                </div>
              </div>
            </div>
            <div class="content">
              <h4 class="name">Elena Marie Clair</h4>
              <span class="designation">Project Management</span>
              <div class="social-icons">
                <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="single-teacher-item">
            <div class="thumb">
              <img src="assets/img/University/About-us-1/teacher_3.png" alt="">
              <div class="hover">
                <span class="plus"><i class="fas fa-plus-circle"></i></span>
                <div class="hover-inner">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue.
                    Praesent cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac. Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue. Praesent
                    cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac.</p>
                </div>
              </div>
            </div>
            <div class="content">
              <h4 class="name">Elena Marie Clair</h4>
              <span class="designation">Project Management</span>
              <div class="social-icons">
                <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="single-teacher-item">
            <div class="thumb">
              <img src="assets/img/University/About-us-1/teacher_2.png" alt="">
              <div class="hover">
                <span class="plus"><i class="fas fa-plus-circle"></i></span>
                <div class="hover-inner">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue.
                    Praesent cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac. Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue. Praesent
                    cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac.</p>
                </div>
              </div>
            </div>
            <div class="content">
              <h4 class="name">Elena Marie Clair</h4>
              <span class="designation">Project Management</span>
              <div class="social-icons">
                <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="single-teacher-item">
            <div class="thumb">
              <img src="assets/img/University/About-us-1/teacher_2.png" alt="">
              <div class="hover">
                <span class="plus"><i class="fas fa-plus-circle"></i></span>
                <div class="hover-inner">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue.
                    Praesent cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac. Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue. Praesent
                    cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac.</p>
                </div>
              </div>
            </div>
            <div class="content">
              <h4 class="name">Elena Marie Clair</h4>
              <span class="designation">Project Management</span>
              <div class="social-icons">
                <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="single-teacher-item">
            <div class="thumb">
              <img src="assets/img/University/About-us-1/teacher_2.png" alt="">
              <div class="hover">
                <span class="plus"><i class="fas fa-plus-circle"></i></span>
                <div class="hover-inner">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue.
                    Praesent cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac. Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus imperdiet metus at congue. Praesent
                    cursus a ante ut facilisis. Morbi iaculis dolor purus, auctor porta dolor gravida ac.</p>
                </div>
              </div>
            </div>
            <div class="content">
              <h4 class="name">Elena Marie Clair</h4>
              <span class="designation">Project Management</span>
              <div class="social-icons">
                <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="teacher-carousel-controls hide-md-and-down">
          <div class="dots"></div>
        </div>
      </div>

              <!-- Carousel Indicator -->

      </div>
    </div>
  </div>

  <!-- Become an instructor -->
  <div class="opportunity-section section">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-12 col-md-9 content">
          <h2 class="margin-bottom-20">Whould like to become a instructor?</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in velit odio. Morbi sodales nisi nec tortor
            commodo, malesuada fermentum magna faucibus. Proin fringilla ante lacus, eu condimentum est rutrum eget.
            Vestibulum molestie at sapien sed facilisis.</p>
        </div>
        <div class="col-12 col-md-3 d-flex justify-content-md-center btn">
          <div class="main-btn">Get Started</div>
        </div>
      </div>
    </div>
  </div>
<?php include "./include/footer.php"?>