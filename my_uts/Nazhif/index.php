<?php include "koneksi.php" ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Nazhif Portofolio</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- header -->
      <div class="header">
         <div class="container">
            <div class="row d_flex">
               <div class=" col-md-2 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="index.php"><img src="images/log.png" alt="#" /></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-8 col-sm-12">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                              <a class="nav-link" href="index.php">Home</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="about.php">About</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="hobby.php">Galeri</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="project.php">Project</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="contact.php">Contact Us</a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
      <!-- end header inner -->
<!-- top -->
<div class="full_bg">
   <div class="slider_main">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <!-- carousel code -->
               <div id="banner1" class="carousel slide">
                  <div class="carousel-inner">
                     <?php
                     $sql = "SELECT * FROM dashbord";
                     $result = $conn->query($sql);
                     $first = true;
                     if ($result->num_rows > 0) {
                         while($row = $result->fetch_assoc()) {
                             echo '<div class="carousel-item' . ($first ? ' active' : '') . '">';
                             echo '   <div class="carousel-caption relative">';
                             echo '      <div class="row">';
                             echo '         <div class="col-md-6">';
                             echo '            <div class="dream">';
                             echo '               <h1>' . $row["description"] . '</h1>';
                             echo '               <br>';
                             echo '               <br>';
                             echo '               <a class="read_more" href="about.php">Get Started</a>';    
                             echo '               <a class="read_more" href="contact.php">Contact Us</a>';
                             echo '            </div>';
                             echo '         </div>';
                             echo '         <div class="col-md-6">';
                             echo '            <div class="dream_img">';
                             echo '               <figure><img src="' . $row["image_url"] . '" alt="#"/></figure>';
                             echo '            </div>';
                             echo '         </div>';
                             echo '      </div>';
                             echo '   </div>';
                             echo '</div>';
                             $first = false;
                         }
                     } else {
                         echo "Data tidak ditemukan";
                     }
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

      <!-- about -->
      <div class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>About <span class="blue_light">Me</span></h2>
                  </div>
               </div>
               <div class="col-md-10 offset-md-1">
                  <div class="about_img text_align_center">
                     <figure><img src="images/nabout.png" alt="#"/></figure>
                     <p>
                     Saya adalah mahasiswa Informatika di Universitas Pembangunan Jaya dengan fokus pada pengembangan perangkat lunak dan teknologi digital. Portofolio saya mencakup proyek aplikasi web, algoritma, dan keamanan jaringan. Saya berpengalaman bekerja dalam tim menggunakan metodologi agile, serta memiliki keterampilan analitis dan komunikasi yang baik. Saya berkomitmen untuk terus belajar, berinovasi, dan siap menghadapi tantangan di industri teknologi yang dinamis.                     </p>
                     </p>
                     <a class="read_more" href="about.php">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- contact -->
      <div class="contact">
         <div class="container">
            <div class="row ">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>Contact <span class="blue_light">Us</span></h2>
                  </div>
               </div>
               <div class="col-md-10 offset-md-1">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name=" Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone number" type="type" name="Phone Number">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Your Email" type="type" name="Email">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Submit Now</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- contact -->

<?php include "footer.php" ?>