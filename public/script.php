<?php

function getPostsFromApi() {
    $url = 'http://127.0.0.1:8000/api/posts'; // Cambia esto por la URL real de tu API
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/json'
    ]);
    
    $response = curl_exec($ch);
    
    if (curl_errno($ch)) {
        echo 'Error en cURL: ' . curl_error($ch);
        return null;
    }
    
    curl_close($ch);
    
    return json_decode($response, true);
}

// Uso del script
$posts = getPostsFromApi();

if ($posts) {
    echo "<h2>Lista de Posts</h2>";
    echo "<ul>";
    foreach ($posts['data'] as $post) {
        echo "<li><strong>{$post['title']}</strong>: {$post['body']}</li>";
    }
    echo "</ul>";
} else {
    echo "No se pudieron obtener los posts.";
}
