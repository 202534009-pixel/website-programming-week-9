
<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("405 - Method Not Allowed. Gunakan metode POST.");
}

// Mengambil dan membersihkan data
function ambilInput(string $nama): string
{
    $nilai = $_POST[$nama] ?? "";

    return is_string($nilai) ? trim($nilai) : "";
}

$nama = ambilInput("nama");
$email = ambilInput("email");
$pesan = ambilInput("pesan");

// Menyiapkan validasi
$error = [];

if ($nama === "") {
    $error[] = "Nama wajib diisi.";
} elseif (strlen($nama) > 100) {
    $error[] = "Nama maksimal 100 karakter.";
}

if ($email === "") {
    $error[] = "Email wajib diisi.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error[] = "Format email tidak valid.";
}

if ($pesan === "") {
    $error[] = "Pesan wajib diisi.";
} elseif (strlen($pesan) > 500) {
    $error[] = "Pesan maksimal 500 karakter.";
}

// Jika terdapat kesalahan, tampilkan HTTP 422
if (!empty($error)) {
    http_response_code(422);
    ?>

    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Validasi Gagal</title>
    </head>
    <body>

        <h1>Data Tidak Valid</h1>

        <p>Silakan perbaiki kesalahan berikut:</p>

        <ul>
            <?php foreach ($error as $pesanError): ?>
                <li>
                    <?= htmlspecialchars($pesanError, ENT_QUOTES, "UTF-8") ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <a href="form.php">Kembali ke Formulir</a>

    </body>
    </html>

    <?php
    exit;
}

// Jika data valid, arahkan ke success.php
header("Location: success.php", true, 303);
exit;