
<?php include "koneksi.php"; ?>
<?php include "header.php"; ?>

<!-- order -->
<div class="order">
   <div class="container">
      <div class="row">
         <div class="col-md-8 offset-md-2">
            <div class="titlepage text_align_center">
               <h2>Check Out My Galeri</h2>
               <p>Selamat datang digaleri seputar kehidupan saya, dimana galeri ini berisikan foto saya dengan hal - hal yang saya suka dan juga hobby saya</p>
            </div>
         </div>
      </div>
      <div class="row">
         <?php
         $sql = "SELECT * FROM images";
         $result = $conn->query($sql);

         if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               echo '<div class="col-md-4">
                     <div id="ho_co" class="order-box_main">
                        <div class="order-box text_align_center">
                           <ul class="supp">
                              <img src="' . $row["image_url"] . '" alt="' . $row["description"] . '">
                           </ul>
                        </div>
                     </div>
                  </div>';
            }
         } else {
            echo "0 results";
         }
         ?>
      </div>
   </div>
</div>
<!-- end order -->

<?php include "footer.php"; ?>
