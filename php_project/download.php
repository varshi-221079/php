<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM files ORDER BY id DESC");

echo "<h2>Download Files</h2>";

while($row = mysqli_fetch_assoc($result)) {

    echo "<p>
            " . $row['filename'] . " 
            - <a href='" . $row['filepath'] . "' download>Download</a>
          </p>";
}
?>