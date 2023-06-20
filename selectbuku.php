<?php
include 'connection.php';

// Query SQL untuk mengambil semua data buku
$sql = "SELECT * FROM buku";
$result = $conn->query($sql);

$books = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
    $response = [
        'status' => 'success',
        'data' => $books
    ];
} else {
    $response = [
        'status' => 'success',
        'data' => []
    ];
}

echo json_encode($response);
?>