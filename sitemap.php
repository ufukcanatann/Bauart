<?php
header("Content-Type: application/xml; charset=utf-8");

define("BASE_URL", "http://localhost/bauart-ftp/");
$pages = [
    'index.php',
    'about-us.php',
    'contact.php',
    'project.php'
];

$projectsJson = file_get_contents('projects/projects.json');
$projects = json_decode($projectsJson, true);

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
foreach ($pages as $page) {
    echo '<url>';
    echo '<loc>' . BASE_URL . $page . '</loc>';
    echo '<lastmod>' . date('Y-m-d') . '</lastmod>';
    echo '<changefreq>monthly</changefreq>';
    echo '<priority>0.8</priority>';
    echo '</url>';
}

foreach ($projects as $project) {
    echo '<url>';
    echo '<loc>' . BASE_URL . 'projects/project-details.php?id=' . $project['id'] . '</loc>';
    echo '<lastmod>' . date('Y-m-d') . '</lastmod>';
    echo '<changefreq>monthly</changefreq>';
    echo '<priority>0.8</priority>';
    echo '</url>';
}

echo '</urlset>';
?>

<!-- bauart.destek@hotmail.com -->
<!-- Bauart.2024! -->