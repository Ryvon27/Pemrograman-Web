<?php include "koneksi.php" ?>
<?php include "header.php" ?>
<form id="request" class="main_form" method="POST" action="process_contact.php">


<div class="domain">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>My Certificate<span class="blue_light"> & Small project</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            // Query untuk mengambil data dari tabel certificates
            $sql = "SELECT image, description FROM certificates";
            $result = $conn->query($sql); // Asumsi $conn adalah koneksi ke database

            if ($result->num_rows > 0) {
                // Menampilkan data
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4">';
                    echo '    <div id="ho_co" class="order-box_main">';
                    echo '        <div class="order-box text_align_center">';
                    echo '            <ul class="supp">';
                    echo '                <img src="' . $row['image'] . '" alt="">';
                    echo '                <li>' . $row['description'] . '</li>';
                    echo '            </ul>';
                    echo '        </div>';
                    echo '    </div>';
                    echo '</div>';
                }
            } else {
                echo '<div class="col-md-12 text_align_center"><p>No certificates found.</p></div>';
            }
            ?>
        </div>
    </div>
</div>


<?php include "footer.php" ?>
