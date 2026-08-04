<?php
/**
 * Shinobi Architect - Contact Form Processor
 */

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status' => 'error',
        'message' => 'Metode permintaan tidak valid.'
    ]);
    exit;
}

// Sanitize & Validate Inputs
$name    = isset($_POST['name']) ? trim(filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS)) : '';
$email   = isset($_POST['email']) ? trim(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) : '';
$message = isset($_POST['message']) ? trim(filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS)) : '';

if (empty($name) || empty($email) || empty($message)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Mohon isi semua kolom yang wajib diisi dengan benar.'
    ]);
    exit;
}

// Simulasi pengiriman pesan
$success = true;

if ($success) {
    echo json_encode([
        'status' => 'success',
        'message' => 'Pesan diterima! Shinobi Arsitek akan segera merespons.'
    ]);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Pengiriman gagal. Silakan coba lagi nanti.'
    ]);
}
exit;