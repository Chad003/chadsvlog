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
        $limit = isset($_GET['limit']) ? max(1, min(50, (int) $_GET['limit'])) : 20;
        $offset = isset($_GET['offset']) ? max(0, (int) $_GET['offset']) : 0;

        $sql = "SELECT 
                p.ID,
                p.TITLE,
                p.MESSAGE,
                p.HERO_IMAGE_SOURCE,
                p.REPLY_COUNT,
                u.USERNAME AS CREATED_BY,
                p.CREATED_DATE
                FROM t_posts p
                LEFT JOIN t_users u
                ON p.CREATED_BY = u.ID
                ORDER BY p.CREATED_DATE DESC 
                LIMIT :limit OFFSET :offset";

        $stmt = $DB_CONNECTION->prepare($sql);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($posts)) {
            return Response::failed()
                ->withMessage("No posts found")
                ->build();
        }

        // Format the response data
        $formattedPosts = [];
        foreach ($posts as $row) {
            $formattedPosts[] = [
                "id" => (int) ($row['ID'] ?? 0),
                "title" => $row['TITLE'] ?? null,
                "message" => $row['MESSAGE'] ?? null,
                "hero_image" => $row['HERO_IMAGE_SOURCE'] ?? null,
                "reply_count" => (int) ($row['REPLY_COUNT'] ?? 0),
                "created_by" => $row['CREATED_BY'] ?? null,
                "created_date" => $row['CREATED_DATE'] ?? null,
            ];
        }

        return Response::success()
            ->withData($formattedPosts)
            ->withMessage("Posts retrieved successfully")
            ->build();

    } catch (Throwable $e) {
        error_log("Error in fetching data: " . $e->getMessage());
        return Response::failed()
            ->withMessage("An error occurred while fetching posts")
            ->build();
    }
}

// ====================== EXECUTE ======================
$response = transact();

http_response_code($response->code === 0 ? 200 : 400);

echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);