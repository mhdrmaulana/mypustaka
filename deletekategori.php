<?php
include 'connection.php';

// Mendapatkan data dari request
if (isset($_POST['kode'])) {
    $kode = $_POST['kode'];

// Query SQL untuk menghapus data kategori berdasarkan kode
    $sql = "DELETE FROM kategori WHERE kode='$kode'";

    if ($conn->query($sql) === TRUE) {
        $response = [
            'status' => 'success',
            'message' => 'Data kategori berhasil dihapus.'
        ];
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Terjadi kesalahan: ' . $conn->error
        ];
    }
}

echo json_encode($response);
?>