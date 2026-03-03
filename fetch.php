<?php
include 'db.php';

$result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");

while ($row = $result->fetch_assoc()) {

    $task = htmlspecialchars($row['task'], ENT_QUOTES);

    echo "<tr>";
    echo "<td>$task</td>";
    echo "<td class='actions'>
            <button class='edit-btn' onclick=\"editTask(".$row['id'].", '$task')\">Edit</button>
            <button class='delete-btn' onclick=\"deleteTask(".$row['id'].")\">Delete</button>
          </td>";
    echo "</tr>";
}
?>