<?php include "koneksi.php" ?>
<?php include "header.php" ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Menyiapkan dan mengeksekusi perintah untuk menyimpan data ke tabel kontak
    $stmt = $conn->prepare("INSERT INTO kontak (name, phone_number, email, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $phone_number, $email, $message);

    if ($stmt->execute()) {
        echo "<p>Data berhasil disimpan!</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    // Menutup statement
    $stmt->close();
}
?>

<div class="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <form id="request" class="main_form" method="POST" action="">
            <div>
                <input class="contactus" placeholder="Name" type="text" name="name" required>
            </div>
            <div>
                <input class="contactus" placeholder="Phone number" type="text" name="phone_number" required>
            </div>
            <div>
                <input class="contactus" placeholder="Your Email" type="email" name="email" required>
            </div>
            <div>
                <textarea class="textarea" placeholder="Message" name="message" required></textarea>
            </div>
            <div>
                <button class="send_btn" type="submit">Submit Now</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
<!-- contact -->

<?php include "footer.php" ?>
