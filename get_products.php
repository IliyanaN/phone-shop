<?php
require 'db.php';

$result = $conn->query("SELECT * FROM cases");

while ($row = $result->fetch_assoc()) {
    echo '<div class=\"product\">';
    echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
    echo '<p>' . number_format($row['price'], 2) . ' лв.</p>';
    if (!empty($row['image'])) {
        echo '<img src=\"' . htmlspecialchars($row['image']) . '\" width=\"100\">';
    }
    echo '</div>';
}
?>