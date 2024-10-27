<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['file']) && isset($data['filename'])) {
        $fileData = base64_decode($data['file']);
        $fileName = basename($data['filename']);

        // Ensure the public directory exists
        $publicDir = __DIR__;
        if (!is_dir($publicDir)) {
            mkdir($publicDir, 0777, true);
        }

        $filePath = $publicDir . '/' . $fileName;
        if (file_put_contents($filePath, $fileData)) {
            echo json_encode(['status' => 'success', 'message' => 'File uploaded successfully', 'file_path' => '/' . 'api/' . $fileName]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to write file']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid file data']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>