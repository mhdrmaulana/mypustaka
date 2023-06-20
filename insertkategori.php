<?php
include 'connection.php';

// Mendapatkan data dari request
$kode = isset($_POST['kode']) ? $_POST['kode'] : '';
$kategori = isset($_POST['kategori']) ? $_POST['kategori'] : '';

if (!empty($kode) && !empty($kategori)) {
    // Query SQL untuk memasukkan data kategori ke database
    $sql = "INSERT INTO kategori (kode, kategori) VALUES ('$kode', '$kategori')";

    if ($conn->query($sql) === TRUE) {
        $response = [
            'status' => 'success',
            'message' => 'Data kategori berhasil ditambahkan.'
        ];
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Terjadi kesalahan: ' . $conn->error
        ];
    }
} else {
    $response = [
        'status' => 'error',
        'message' => 'Data kategori tidak lengkap.'
    ];
}

echo json_encode($response);
?>