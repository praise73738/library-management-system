<?php
include "db.php";

$student_id = $_POST['student_id'];
$book_id = $_POST['book_id'];

$sql = "INSERT INTO borrow_records (student_id, book_id)
        VALUES ('$student_id', '$book_id')";

if (mysqli_query($conn, $sql)) {
    echo "Book Borrowed Successfully";
} else {
    echo "Error";
}
?>