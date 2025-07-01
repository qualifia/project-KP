<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Let's Connect With Me!</h1>
  <form action="contact.php" method="POST">
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="message">Pesan:</label>
    <textarea id="message" name="message" required></textarea>
    <br>
    <button type="submit" name="submit">Kirim</button>
  </form>
  <?php
    if (isset($_POST['submit'])) {
        include 'db.php'; // Hubungkan ke database

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        $query = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

        if (mysqli_query($conn, $query)) {
            echo "<p>Pesan Anda berhasil disampaikan. Terima kasih!</p>";
        } else {
            echo "<p>Error: " . mysqli_error($conn) . "</p>";
        }
    }
    ?>
</body>
</html>