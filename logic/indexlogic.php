<?php
function connectToDatabase() {
    $servername = "localhost";
    $username = "dev";
    $password = "devs";
    $dbname = "pokemondisplaysystem";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function executeQuery($conn, $sql, $params = []) {
    try {
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            throw new Exception($conn->error);
        }

        // Check if it's a SELECT query
        $isSelectQuery = stripos($sql, 'SELECT') === 0;

        if (!empty($params)) {
            // Bind parameters if present
            $types = str_repeat('s', count($params));
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();

        if ($isSelectQuery) {
            $result = $stmt->get_result();
            if ($result === FALSE) {
                throw new Exception($stmt->error);
            }
            return $result;
        }

        return true; // For non-SELECT queries
    } catch (Exception $e) {
        // Log the exception or handle it appropriately
        echo "Error: " . $e->getMessage();

        // Close the statement if it's not null
        if ($stmt !== null) {
            $stmt->close();
        }

        // Close the connection and reconnect
        $conn->close();
        $conn = connectToDatabase();

        // Retry the query
        return executeQuery($conn, $sql, $params);
    }
}

function loginUser($conn) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $email = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];

    $sql = "SELECT * FROM user_account WHERE Email = ?";
    $result = executeQuery($conn, $sql, [$email]);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify the password
        if (password_verify($password, $user['Password'])) {
            session_start();
            $_SESSION['User_id'] = $user['id'];
            $_SESSION['Username'] = $user['Username'];
            $_SESSION['Email'] = $user['Email'];
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid password. Please try again.";
        }
    } else {
        $error = "No account found with this email.";
    }

    $_SESSION['login_error'] = $error;
    header("Location: login.php");
    exit();
}


?>
