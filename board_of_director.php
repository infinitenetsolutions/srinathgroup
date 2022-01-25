<?php include "./include/header.php";

include "./config.php";
$query = "SELECT * FROM `jag_patron`";
$result = mysqli_query($connection , $query);
$row = mysqli_fetch_assoc($result);
?>
 
<div class="breadcrub-style-1 section">
    <div class="row d-flex align-items-center">
      <div class="col-12 col-md-8 bg-img" style="background-image: url(assets/img/University/enrolment/brunette-conversation.png)"></div>
      <div class="d-none d-md-block col-4 bg-color"></div>
    </div>
    <div class="heading text-center">
      <h1>Board Of Director</h1>
      <div class="breadcrub-style">
        <a href="#">Coursces</a>
        <span class="arrow"> &gt; </span>
        <a href="#" class="active">Board Of Director</a>
      </div>
    </div>
  </div>

 <section class="teacher-details section">
      <div class="container-fluid">
        <!-- Side form icons -->        
        <div class="row">                 
        <div class="col-12 col-md-6 content">            
            <div class="about">
            <img class="media" style="width: 640px;height: 440px;" <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?>  alt="Legal Doc" />
            </div>            
          </div>
          <!-- For large screen -->
          <div class="col-12 col-md-6 content">            
            <div class="about">
              <!-- <h2>Board Of Director</h2> -->
           
                
                <?php echo $row['description'];?>               
              
            </div>            
          </div>
        </div>
      </div>
    </section>

    
<?php include "./include/footer.php";?>