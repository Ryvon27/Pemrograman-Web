<?php include "koneksi.php" ?>
<?php include "header.php" ?>


<!-- about -->
<div class="about">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage text_align_center">
               <?php
               $sql = "SELECT title, content, image FROM about_me WHERE id = 1";
               $result = $conn->query($sql);

               if ($result->num_rows > 0) {
                   // output data of each row
                   while($row = $result->fetch_assoc()) {
                       echo "<h2>" . $row["title"] . " <span class='blue_light'>Me</span></h2>";
                   }
               } else {
                   echo "0 results";
               }
               ?>
            </div>
         </div>
         <div class="col-md-10 offset-md-1">
            <div class="about_img text_align_center">
               <?php
               if ($result->num_rows > 0) {
                   // output data of each row
                   $result->data_seek(0); // reset pointer to the first row
                   while($row = $result->fetch_assoc()) {
                       echo "<figure><img src='" . $row["image"] . "' alt='#'/></figure>";
                       echo "<p>" . nl2br($row["content"]) . "</p>";
                   }
               }
               ?>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end about -->

<?php $conn->close(); ?>
<?php include "footer.php"; ?>
