<?php include "./include/header.php";
  // include "./admin/connection.inc.php";
  include './admin/function.inc.php';
  $connection=mysqli_connect('localhost','root',"","srinath_group");
if(isset($_POST['submit'])){
$f_name = $_POST['f_name'];
$email = $_POST['email'];
$number = $_POST['number'];
$qualification = $_POST['qualification'];
// $resume = $_POST['resume'];
$resume = addslashes(file_get_contents($_FILES['resume']['tmp_name']));

$ins = "INSERT INTO `career`(`full_name`, `email`, `number`, `last_qualification`, `resume`) VALUES ('$f_name','$email','$number','$qualification','$resume')";
// print_r($ins);exit();

$query = mysqli_query($connection , $ins);
if($query){
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
      <h1>Career With Us</h1>
      <div class="breadcrub-style">
        <a href="#">Index</a>
        <span class="arrow"> &gt; </span>
        <a href="#" class="active">Career</a>
      </div>
    </div>
  </div>


<div class="teacher-form section">
    <div class="row">
      <div class="col-12 col-xl-10">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-md-7 content">
              <div class="text">
                <h2>Career With Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus augue nibh, at ullamcorper orci
                  ullamcorper ut. Integer vehicula iaculis risus, non consequat eros tincidunt ac.</p>
              </div>

              <form action="#" class="form-style-2" enctype="multipart/form-data" method="POST">
                <div class="form-group required">
                  <label for="f_name">Full name</label>
                  <input type="text" id="f_name" class="form-control" name="f_name" placeholder="Enter Full Name">
                </div>
                <div class="form-group required">
                  <label for="email_address">Email address</label>
                  <input type="email" id="email_address" class="form-control" name="email" placeholder="Enter Email">
                </div>

                <div class="form-group required">
                  <label for="l_name">Phone number</label>
                  <input type="number" id="l_name" class="form-control" name="number" placeholder="Enter Phone Number">
                </div>
                <div class="form-group required">
                  <label for="qualification1">Last Qualifications</label>
                  <input type="text" id="qualification1" class="form-control" name="qualification" placeholder="Last Qualifications">
                  <!-- <input type="text" id="qualification2" class="form-control" name="qualification" placeholder="2. Masters in Marketing and management"> -->
                </div>
                <div class="form-group required">
                  <label for="qualification1">Upload Resume</label>
                  <input type="file" id="qualification1" class="form-control" name="resume" placeholder="Last Qualifications">
                  <!-- <input type="text" id="qualification2" class="form-control" name="qualification" placeholder="2. Masters in Marketing and management"> -->
                </div>
                

                <!-- <div class="form-group required">
                  <label for="job_type">Job type</label>
                  <div class="options">
                    <p>Full time</p>
                    <p>Part time</p>
                  </div>
                  <label class="toggle-switch">
                    <input id="job_type" type="checkbox">
                    <span class="option-slider"></span>
                  </label>
                </div> -->

                <button class="main-btn" name="submit">Send request</button>
                
              </form>
            </div>

            <div class="col-5 d-sm-none d-md-block media">
              <!-- Background Img Goes Here -->
            </div>

            <!-- Halfway Button -->
            <button id="" class="d-none d-md-block halfway-btn" name="">
              <i class="flaticon-play-button"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include "./include/footer.php";?>