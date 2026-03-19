<?php

header("Content-Type: application/json");

$notes = json_decode(file_get_contents("notes.json"), true);

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

if ($path === "/notes") {
    echo json_encode($notes);
    exit;
}

if (preg_match("#^/notes/(\d+)$#", $path, $matches)) {
    $id = (int) $matches[1];

    foreach ($notes as $note) {
        if ($note["id"] === $id) {
            echo json_encode($note);
            exit;
        }
    }

    http_response_code(404);
    echo json_encode(["error" => "Note not found"]);
    exit;
}

http_response_code(404);
echo json_encode(["error" => "Not found"]);