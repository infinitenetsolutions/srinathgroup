<?php include "./include/header.php";
$connection=mysqli_connect('localhost','root',"","srinath_group");

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = "INSERT INTO `contact`(`name`, `email`, `number`, `subject`, `message`) VALUES ('$name','$email','$number','$subject','$message')";
$result = mysqli_query($connection , $query);
if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> Career inserted successfully !!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>';
  }else{
    echo 'not inserted';
  }
}

?>

<div class="breadcrub-style-1 section">
    <div class="row d-flex align-items-center">
      <div class="col-12 col-md-8 bg-img" style="background-image: url(assets/img/University/enrolment/brunette-conversation.png)"></div>
      <div class="d-none d-md-block col-4 bg-color"></div>
    </div>
    <div class="heading text-center">
      <h1>Contact us</h1>
      <div class="breadcrub-style">
        <a href="#">Contact us</a>
        <span class="arrow"> &gt; </span>
        <a href="#" class="active">Contact us</a>
      </div>
    </div>
  </div>

<section class="sign-up-section section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 sign-in">
          <div class="content">
              <h2>Reach us</h2>
            
              <!-- <a href="sign-in.html" class="main-btn">Sign in</a> -->

              <div class="contact-info">
          <p class="d-none d-xl-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus augue nibh,
            at ullamcorper orci
            ullamcorper ut. Integer vehicula iaculis risus, non consequat eros tincidunt ac.</p>

            <div class="contact-links">
              <p class="mail contact-us-links"><i class="fas fa-map-marker-alt"></i> Location : Adityapur</p>
              <p class="mail contact-us-links"><i class="fas fa-envelope-open"></i> Email : info@bantinguniversity.com</p>
              <p class="mail contact-us-links"><i class="fas fa-phone-alt"></i> Call : 8603310087</p>
                           
            </div>
          </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 sign-up">
          <div class="content">
              <h2>Contact us</h2>
              <div class="sign-with-social">
                <!-- <h6>Sign up using</h6>
                <div class="social-links">
                    <a target="_blank" href="#"><i class="fab fa-facebook-square"></i></a>
                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                    <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                </div> -->
                <div class="sign-with-email">
                  <!-- <h6>Or Sign up using your email</h6> -->
                  <form action="#" class="form-style-2" method="POST">
                      <div class="form-group required">
                        <!-- <label for="username">Enter Name</label> -->
                        <input type="text" id="username" class="form-control" name="name" placeholder="Enter Name">
                      </div>
                      <div class="form-group required">
                        <!-- <label for="email_address">Enter Email</label> -->
                        <input type="email" id="email_address" class="form-control" name="email" placeholder="Enter Email">
                      </div>
                      <div class="form-group required">
                        <!-- <label for="email_address">Enter Email</label> -->
                        <input type="number" id="email_address" class="form-control" name="number" placeholder="Enter Number">
                      </div>
                      <div class="form-group required">
                        <!-- <label for="email_address">Enter Subject</label> -->
                        <input type="text" id="subject" class="form-control" name="subject" placeholder="Enter Subject">
                      </div>
                      <div class="form-group required">
                        <!-- <label for="email_address">Enter Message</label> -->
                        <!-- <input type="email" id="email_address" class="form-control" name="email" placeholder="johnLP11@gmail.com"> -->
                    <textarea name="message" id="" cols="30" rows="3" class="form-control" placeholder="Enter Message"></textarea> 
                    </div>
                      <!-- <div class="form-group required">
                        <label for="password">Message</label>
                        <input type="password" id="password" class="form-control" name="password" placeholder="*****************">
                          <span class="small-text">The password should be at least twelve characters long.<br>To make it stronger, use upper and lower case letters, numbers, and symbols like ! “ ? $ % ^ &amp;</span>
                      </div> -->
                      <button class="small-btn" name="submit">Send in</button>
                    </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include "./include/footer.php";?>