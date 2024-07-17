<?php
header("Content-Type: text/plain");
define("BASE_URL", "http://localhost/bauart-ftp/");

echo "User-agent: *\n";
echo "Disallow: /admin/\n";
echo "Disallow: /login/\n";
echo "Disallow: /register/\n";
echo "Disallow: /tmp/\n\n";
echo "User-agent: BadBot\n";
echo "Disallow: /\n\n";

echo "Sitemap: " . BASE_URL . "sitemap.xml\n";
?>
