<?php
include_once 'access_files.php';
$sql ="DELETE FROM file2 WHERE id='" .$_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {

echo "";
} else {
echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>