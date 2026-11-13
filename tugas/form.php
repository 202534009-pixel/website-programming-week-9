
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Kontak</title>
</head>
<body>

    <h1>Formulir Kontak</h1>
    <p>Silakan isi formulir berikut untuk mengirim pesan.</p>

    <form action="process.php" method="post">

        <label for="nama">Nama Lengkap:</label>
        <input
            type="text"
            id="nama"
            name="nama"
            maxlength="100"
            required
        >

        <br><br>

        <label for="email">Alamat Email:</label>
        <input
            type="email"
            id="email"
            name="email"
            maxlength="100"
            required
        >

        <br><br>

        <label for="pesan">Pesan:</label>
        <textarea
            id="pesan"
            name="pesan"
            maxlength="500"
            required
        ></textarea>

        <br><br>

        <button type="submit">Kirim Pesan</button>

    </form>

    <p>
        <a href="search.php">Kembali ke Pencarian Mahasiswa</a>
    </p>

</body>
</html>
