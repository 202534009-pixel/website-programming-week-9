
<?php
$mahasiswa = [
    ["nama" => "Maria", "jurusan" => "Sistem Informasi"],
    ["nama" => "Cece", "jurusan" => "Teknik Sipil"],
    ["nama" => "Desi", "jurusan" => "Teknik Mesin"],
    ["nama" => "Tia", "jurusan" => "Sistem Informasi"]
];

$query = trim($_GET["query"] ?? "");

$hasil = [];

foreach ($mahasiswa as $data) {
    if (
        $query === "" ||
        stripos($data["nama"], $query) !== false ||
        stripos($data["jurusan"], $query) !== false
    ) {
        $hasil[] = $data;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pencarian Mahasiswa</title>
</head>
<body>

    <h1>Pencarian Data Mahasiswa</h1>

    <form action="search.php" method="get">
        <label for="query">Masukkan nama atau jurusan:</label>

        <input
            type="text"
            id="query"
            name="query"
            value="<?= htmlspecialchars($query, ENT_QUOTES, "UTF-8") ?>"
        >

        <button type="submit">Cari</button>
    </form>

    <h2>Hasil Pencarian</h2>

    <?php if (count($hasil) > 0): ?>
        <ul>
            <?php foreach ($hasil as $data): ?>
                <li>
                    <?= htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8") ?>
                    -
                    <?= htmlspecialchars($data["jurusan"], ENT_QUOTES, "UTF-8") ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Data mahasiswa tidak ditemukan.</p>
    <?php endif; ?>

</body>
</html>
