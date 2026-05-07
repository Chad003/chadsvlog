<?php
// /api/content/get-posts.php

include("./../database.config.php");
include("./../response.php");

header("Content-Type: application/json");
header("Cache-Control: no-cache, must-revalidate");

// ====================== MAIN FUNCTION ======================
function transact()
{
    global $DB_CONNECTION;

    try {
        $id = isset($_GET['id']) ? max(1, min(50, (int) $_GET['id'])) : 20;

        $sql = "SELECT 
                p.TITLE,
                p.MESSAGE,
                p.REPLY_COUNT,
                p.HERO_IMAGE_SOURCE,
                u.USERNAME AS CREATED_BY,
                p.CREATED_DATE
                FROM t_posts p
                LEFT JOIN t_users u
                ON p.CREATED_BY = u.ID
                WHERE p.ID = :id";

        $stmt = $DB_CONNECTION->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if (empty($data)) {
            return Response::failed()
                ->withMessage("No posts found")
                ->build();
        }

        // Format the response data
        $formattedPosts = [
            "id" => (int) ($data['ID'] ?? 0),
            "title" => $data['TITLE'] ?? null,
            "message" => $data['MESSAGE'] ?? null,
            "hero_image" => $data['HERO_IMAGE_SOURCE'],
            "reply_count" => (int) ($data['REPLY_COUNT'] ?? 0),
            "created_by" => $data['CREATED_BY'] ?? null,
            "created_date" => $data['CREATED_DATE'] ?? null,
        ];

        return Response::success()
            ->withData($formattedPosts)
            ->withMessage("Posts retrieved successfully")
            ->build();

    } catch (Throwable $e) {
        error_log("Error in fetching data: " . $e->getMessage());
        return Response::failed()
            ->withMessage("An error occurred while fetching posts." . $e->getMessage())
            ->build();
    }
}

// ====================== EXECUTE ======================
$response = transact();

http_response_code($response->code === 0 ? 200 : 400);

echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);