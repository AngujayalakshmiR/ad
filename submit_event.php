<?php
// Include the database connection
include('db.php');

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $eventTitle = $_POST['eventTitle'];
    $eventDescription = $_POST['eventDescription'];
    
    // Handle file upload (event poster)
    if (isset($_FILES['eventPoster']) && $_FILES['eventPoster']['error'] == 0) {
        $fileTmpPath = $_FILES['eventPoster']['tmp_name'];
        $fileName = $_FILES['eventPoster']['name'];
        $fileSize = $_FILES['eventPoster']['size'];
        $fileType = $_FILES['eventPoster']['type'];

        // Define file upload directory
        $uploadDir = 'uploads/';
        $filePath = $uploadDir . $fileName;

        // Move file to the upload directory
        if (move_uploaded_file($fileTmpPath, $filePath)) {
            // File is uploaded successfully, now insert data into the database
            $sql = "INSERT INTO events (name, poster, description) 
                    VALUES ('$eventTitle', '$filePath', '$eventDescription')";

            if ($conn->query($sql) === TRUE) {
                echo "New event added successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "There was an error uploading the file.";
        }
    } else {
        echo "No file uploaded or file upload error.";
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>
