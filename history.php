<?php include "./include/header.php";?>
<style>
.timeline {
            width: 100%;
            height: 480px;
            padding: 20px;
            position: relative;
            box-sizing: border-box;
            background: #cedadd;
            overflow: auto;
            display: flex;
        }
        
        .timieline-title {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
            font-family: sans-serif;
        }
        
        .timeline-content {
            max-width: 300px;
            height: 200px;
            padding: 20px;
            flex-shrink: 0;
            flex-grow: 0;
            align-self: flex-start;
            background: #FFF;
            position: relative;
            border-radius: 10px;
            margin-right: 10px;
            box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.2);
        }
        
        .timeline-content:before {
            position: absolute;
            width: calc(100% + 14px);
            height: 4px;
            top: calc(100% + 8px);
            background: #FFF;
            content: "";
            left: -7px;
            border-radius: 5px;
        }
        
        .timeline-content:after {
            position: absolute;
            width: 4px;
            height: 25px;
            top: 100%;
            left: calc(50% - 10px);
            background: #FFF;
            content: "";
        }
        
        .timeline-period {
            position: absolute;
            top: calc(100% + 25px);
            background: #FFF;
            padding: 10px;
            width: 100px;
            text-align: center;
            border-radius: 10px;
            left: calc(50% - 60px);
            box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.2);
        }
        
        .timeline-period:before {
            width: 15px;
            height: 15px;
            background: #fff;
            border-radius: 50%;
            content: "";
            position: absolute;
            top: -20px;
            left: calc(50% - 6px);
            z-index: 2;
        }
        
        .timeline-content:nth-child(even) {
            align-self: flex-end;
        }
        
        .timeline-content:nth-child(even):before {
            top: -15px;
        }
        
        .timeline-content:nth-child(even):after {
            top: -25px;
        }
        
        .timeline-content:nth-child(even) .timeline-period {
            top: -60px;
        }
        
        .timeline-content:nth-child(even) .timeline-period:before {
            top: calc(100% + 2px);
        }
        </style>
        <body>
            
        <div class="breadcrub-style-1 section">
    <div class="row d-flex align-items-center">
      <div class="col-12 col-md-8 bg-img" style="background-image: url(assets/img/University/enrolment/brunette-conversation.png)"></div>
      <div class="d-none d-md-block col-4 bg-color"></div>
    </div>
    <div class="heading text-center">
      <h1>Our Journey</h1>
      <div class="breadcrub-style">
        <a href="#">Coursces</a>
        <span class="arrow"> &gt; </span>
        <a href="#" class="active">Our Journey</a>
      </div>
    </div>
  </div>
        
         <div class="timeline">
        <div class="timeline-content">
            <div class="timeline-period">1998 - 2000</div>
            <div class="timieline-title">Title 1</div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non nunc eget magna dictum egestas. Nam sed tempor lectus, suscipit mollis erat. Aenean dignissim sem nec orci tempus lacinia.
        </div>

        <div class="timeline-content">
            <div class="timeline-period">2000 - 2002</div>
            <div class="timieline-title">Title 2</div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non nunc eget magna dictum egestas. Nam sed tempor lectus, suscipit mollis erat. Aenean dignissim sem nec orci tempus lacinia.
        </div>

        <div class="timeline-content">
            <div class="timeline-period">2000 - 2002</div>
            <div class="timieline-title">Title 3</div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non nunc eget magna dictum egestas. Nam sed tempor lectus, suscipit mollis erat. Aenean dignissim sem nec orci tempus lacinia.
        </div>

        <div class="timeline-content">
            <div class="timeline-period">2000 - 2002</div>
            <div class="timieline-title">Title 4</div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non nunc eget magna dictum egestas. Nam sed tempor lectus, suscipit mollis erat. Aenean dignissim sem nec orci tempus lacinia.
        </div>

        <div class="timeline-content">
            <div class="timeline-period">2000 - 2002</div>
            <div class="timieline-title">Title 5</div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non nunc eget magna dictum egestas. Nam sed tempor lectus, suscipit mollis erat. Aenean dignissim sem nec orci tempus lacinia.
        </div>
    </div>
    </body>
<?php include "./include/footer.php"?>