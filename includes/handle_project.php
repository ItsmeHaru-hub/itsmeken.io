<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/project_operations.php';

header('Content-Type: application/json');

if (!isset($_POST['action'])) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Action is required']);
    exit;
}

$action = $_POST['action'];
$response = ['success' => false, 'message' => ''];

switch ($action) {
    case 'add':
        if (!isset($_POST['title']) || !isset($_POST['description']) || !isset($_FILES['image'])) {
            $response['message'] = 'Missing required fields';
            break;
        }

        $title = trim($_POST['title']);
        $description = trim($_POST['description']);
        $project_url = isset($_POST['project_url']) ? trim($_POST['project_url']) : '';
        
        // Handle image upload
        $image = $_FILES['image'];
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        
        if (!in_array($image['type'], $allowed_types)) {
            $response['message'] = 'Invalid image type. Only JPG, PNG and GIF are allowed.';
            break;
        }

        $upload_dir = __DIR__ . '/../uploads/';
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        $filename = uniqid() . '_' . basename($image['name']);
        $target_path = $upload_dir . $filename;

        if (move_uploaded_file($image['tmp_name'], $target_path)) {
            $image_path = 'uploads/' . $filename;
            $result = addProject($title, $description, $image_path, $project_url);
            
            if ($result) {
                $response['success'] = true;
                $response['message'] = 'Project added successfully';
            } else {
                $response['message'] = 'Failed to add project';
                // Remove uploaded file if database insert fails
                unlink($target_path);
            }
        } else {
            $response['message'] = 'Failed to upload image';
        }
        break;

    case 'edit':
        if (!isset($_POST['id']) || !isset($_POST['title']) || !isset($_POST['description'])) {
            $response['message'] = 'Missing required fields';
            break;
        }

        $id = (int)$_POST['id'];
        $title = trim($_POST['title']);
        $description = trim($_POST['description']);
        $project_url = isset($_POST['project_url']) ? trim($_POST['project_url']) : '';
        
        // Handle image upload if a new image is provided
        $image_path = null;
        if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
            $image = $_FILES['image'];
            $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
            
            if (!in_array($image['type'], $allowed_types)) {
                $response['message'] = 'Invalid image type. Only JPG, PNG and GIF are allowed.';
                break;
            }

            $upload_dir = __DIR__ . '/../uploads/';
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            $filename = uniqid() . '_' . basename($image['name']);
            $target_path = $upload_dir . $filename;

            if (move_uploaded_file($image['tmp_name'], $target_path)) {
                $image_path = 'uploads/' . $filename;
                
                // Get old image path and delete it
                $old_project = getProject($id);
                if ($old_project && file_exists(__DIR__ . '/../' . $old_project['image_path'])) {
                    unlink(__DIR__ . '/../' . $old_project['image_path']);
                }
            } else {
                $response['message'] = 'Failed to upload image';
                break;
            }
        }

        $result = updateProject($id, $title, $description, $image_path, $project_url);
        
        if ($result) {
            $response['success'] = true;
            $response['message'] = 'Project updated successfully';
        } else {
            $response['message'] = 'Failed to update project';
            // Remove uploaded file if database update fails
            if ($image_path) {
                unlink(__DIR__ . '/../' . $image_path);
            }
        }
        break;

    case 'delete':
        if (!isset($_POST['id'])) {
            $response['message'] = 'Project ID is required';
            break;
        }

        $id = (int)$_POST['id'];
        
        // Get project image path before deleting
        $project = getProject($id);
        if ($project) {
            $result = deleteProject($id);
            
            if ($result) {
                // Delete the image file
                if (file_exists(__DIR__ . '/../' . $project['image_path'])) {
                    unlink(__DIR__ . '/../' . $project['image_path']);
                }
                
                $response['success'] = true;
                $response['message'] = 'Project deleted successfully';
            } else {
                $response['message'] = 'Failed to delete project';
            }
        } else {
            $response['message'] = 'Project not found';
        }
        break;

    default:
        $response['message'] = 'Invalid action';
        break;
}

echo json_encode($response);
?> 