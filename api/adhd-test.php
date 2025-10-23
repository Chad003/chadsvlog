<?php
header("Content-Type: application/json");

// --- Allow only POST method ---
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(500);
    echo json_encode([
        "code" => 500,
        "message" => "internal.server.error",
        "data" => null
    ]);
    exit;
}

// --- Read JSON body ---
$input = file_get_contents("php://input");
$data = json_decode($input, true);

if (json_last_error() !== JSON_ERROR_NONE || !is_array($data)) {
    http_response_code(400);
    echo json_encode([
        "code" => 400,
        "message" => "invalid.json.body",
        "data" => null
    ]);
    exit;
}

// --- Required fields ---
$requiredFields = [
    "name",
    "questionOne",
    "questionTwo",
    "questionThree",
    "questionFour",
    "questionFive",
    "questionSix",
    "questionSeven",
    "questionEight",
    "questionNine",
    "questionTen"
];

$missing = [];
foreach ($requiredFields as $field) {
    if (!isset($data[$field]) || $data[$field] === "") {
        $missing[] = $field;
    }
}

if (!empty($missing)) {
    http_response_code(400);
    echo json_encode([
        "code" => 400,
        "message" => "missing.required.fields",
        "data" => ["missing" => $missing]
    ]);
    exit;
}

// --- Validate answer values (1–4) ---
foreach ($requiredFields as $field) {
    if ($field === "name")
        continue;
    $v = $data[$field];
    if (!is_int($v) || $v < 1 || $v > 4) {
        http_response_code(400);
        echo json_encode([
            "code" => 400,
            "message" => "invalid.answer.value",
            "data" => ["note" => "Each question must be an integer from 1 to 4."]
        ]);
        exit;
    }
}

// --- Compute score ---
$score = 0;
foreach ([
    "questionOne",
    "questionTwo",
    "questionThree",
    "questionFour",
    "questionFive",
    "questionSix",
    "questionSeven",
    "questionEight",
    "questionNine",
    "questionTen"
] as $q) {
    $score += $data[$q];
}

// --- Determine DSM-5 insight ---
if ($score <= 15) {
    $insight = "Unlikely";
} elseif ($score <= 25) {
    $insight = "Possible";
} elseif ($score <= 35) {
    $insight = "Likely";
} else {
    $insight = "Very Likely";
}

// --- Database connection (update credentials) ---
$host = "mysql-chadsvlog.alwaysdata.net";
$user = "chadsvlog";
$pass = "1QAZ2wsx@@";
$dbname = "chadsvlog_chad"; // update if needed

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode([
        "code" => 500,
        "message" => "database.connection.error",
        "data" => null
    ]);
    exit;
}

// --- Save result to t_adhd_results ---
$stmt = $conn->prepare("INSERT INTO t_adhd_results (name, score, insight) VALUES (?, ?, ?)");
$stmt->bind_param("sis", $data['name'], $score, $insight);

if (!$stmt->execute()) {
    http_response_code(500);
    echo json_encode([
        "code" => 500,
        "message" => "database.insert.error",
        "data" => null
    ]);
    $stmt->close();
    $conn->close();
    exit;
}

$stmt->close();
$conn->close();

// --- Return success response ---
http_response_code(200);
echo json_encode([
    "code" => 200,
    "message" => "adhd.test.submission.success",
    "data" => [
        "score" => $score,
        "insight" => $insight
    ]
]);
