<?php
require_once __DIR__ . '/../config/database.php';

function getAllProjects() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM projects ORDER BY created_at DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addProject($title, $description, $image_path, $project_url) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO projects (title, description, image_path, project_url) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$title, $description, $image_path, $project_url]);
}

function updateProject($id, $title, $description, $image_path, $project_url) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE projects SET title = ?, description = ?, image_path = ?, project_url = ? WHERE id = ?");
    return $stmt->execute([$title, $description, $image_path, $project_url, $id]);
}

function deleteProject($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM projects WHERE id = ?");
    return $stmt->execute([$id]);
}

function getProject($id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM projects WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?> 