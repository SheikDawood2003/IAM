<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);

    if ($role == "admin") {
        // Connect to the Admin Database
        $conn = new mysqli("localhost", "root", "", "login");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    } elseif ($role == "student") {
        // Connect to the Student Database
        $conn = new mysqli("localhost", "root", "", "sampleuser");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
    }

    // Execute the prepared statement
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        // Start session and redirect based on role
        session_start();
        $_SESSION['username'] = $username;

        if ($role == "admin") {
            header("Location: iam.php");
        } elseif ($role == "student") {
            header("Location: edit.php");
        }
    } else {
        echo "Invalid username or password.";
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
