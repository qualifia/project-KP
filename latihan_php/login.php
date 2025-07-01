<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login</h1>
    <form method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password</label>
        <input type="text" id="password" name="password" required>
        <br>
        <button type="submit" name="submit">Login</button>
    </form>
    <?php
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username === "admin" && $password === "1234") {
                echo "<p>Login berhasil. Selamat datang, $username!</p>";
              } else {
                echo "<p>Login gagal. Periksa nama pengguna dan kata sandi Anda.</p>";
              }
        }
        ?>
</body>
</html>