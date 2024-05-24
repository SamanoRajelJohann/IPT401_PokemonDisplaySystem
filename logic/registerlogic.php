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

function addUser($conn) {
    $username = $_POST['registerUsername'];
    $email = $_POST['registerEmail'];
    $password = $_POST['registerPassword'];

    $sql = "INSERT INTO user_account (Username, Email, Password) VALUES (?, ?, ?)";
    executeQuery($conn, $sql, [$username, $email, $password]);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = connectToDatabase();
    addUser($conn);
    $conn->close();
    header("Location: index.php");
    exit();
}
?>
