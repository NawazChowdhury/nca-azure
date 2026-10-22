<?php 

// Use htmlspecialchars to prevent XSS attacks
echo "Hello " . htmlspecialchars($_GET['name'] ?? 'Guest', ENT_QUOTES, 'UTF-8');

?>