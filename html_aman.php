<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Validasi Input Aman</title>
</head>
<body>
    <h2>Form Input Aman dan Validasi Email</h2>

    <form method="post" action="">
        <label>Masukkan teks:</label><br>
        <input type="text" name="input" required><br><br>

        <label>Masukkan email:</label><br>
        <input type="text" name="email" required><br><br>

        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Langkah 2: Mengamankan input teks
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        echo "<h3>Hasil Input Aman:</h3>";
        echo "<p>$input</p>";

        // Langkah 6: Validasi email
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<h3>Email Valid:</h3>";
            echo "<p>$email</p>";
        } else {
            echo "<h3 style='color:red;'>Email tidak valid!</h3>";
        }
    }
    ?>
</body>
</html>