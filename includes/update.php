<?php

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $newData = $_POST['new_data']; // Assuming the new data is passed via POST

    // Prepare an update statement
    $sql = "UPDATE your_table SET your_column = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("si", $newData, $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close statement
    $stmt->close();
}

?>
