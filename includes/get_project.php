<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/project_operations.php';

header('Content-Type: application/json');

if (!isset($_GET['id'])) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Project ID is required']);
    exit;
}

$id = (int)$_GET['id'];
$project = getProject($id);

if ($project) {
    echo json_encode($project);
} else {
    http_response_code(404);
    echo json_encode(['success' => false, 'message' => 'Project not found']);
}
?> 