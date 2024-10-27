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

        // Validate the file type
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_buffer($finfo, $fileData);
        finfo_close($finfo);

        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/pdf'];

        if (in_array($mimeType, $allowedTypes)) {
            // Create a unique name for the image
            $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

            // Set the destination path
            $filePath = $publicDir . '/' . $newFileName;

            // Save the file
            if (file_put_contents($filePath, $fileData)) {
                echo json_encode(['status' => 'success', 'message' => 'File uploaded successfully', 'file_path' => '/' . 'api/' . $newFileName]);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to write file']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid file type']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid file data']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
