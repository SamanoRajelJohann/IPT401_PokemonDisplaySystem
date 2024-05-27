function connectToDatabase(){
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

function executeQuery($conn, $sql, $params = []){
    try {
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            throw new Exception($conn->error);
        }

        // Check if it's a SELECT query
        $isSelectQuery = stripos($sql, 'SELECT') === 0;

        if (!$isSelectQuery && !empty($params)) {
            // For non-SELECT queries, proceed with binding parameters
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

function displayUserData($conn) {
    $sql_select = "SELECT * FROM user_account";
    $result = executeQuery($conn, $sql_select);
    $userCount = 1; // Start from 1

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<thead>";
        echo "<tr>
                <th>Number</th>
                <th>ID</th>
                <th>Email</th>
                <th>Username</th>
                <br>
                <th>Action</th>
              </tr>";
        echo "</thead>";
        echo "<tbody>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $userCount . "</td>"; // Display count
            echo "<td>" . $row["Username_id"] ."</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<br>";
            echo "<td>" . $row["Username"] . "</td>";
            echo "<td>";
            echo "<div style='display: inline-block;'>";
            echo "<form action='update.php' method='get'>";
            echo "<input type='hidden' name='Username_id' value='" . $row["Username_id"] . "'>";
            echo "<input type='hidden' name='Email' value='" . $row["Email"] . "'>";
            echo "<input type='hidden' name='Username' value='" . $row["Username"] . "'>";
            echo "<input type='hidden' name='Password' value='" . $row["Password"] . "'>";
            echo "<input type='submit' value='Update' style='background-color: #007bff; color: #ffffff; border: none; padding: 8px 17px; border-radius: 4px; cursor: pointer;'>";
            echo "</form>";
            echo "</div>";
            echo "&nbsp;&nbsp;"; // Add space between buttons
            echo "<div style='display: inline-block;'>";
            echo "<form method='post' action='".$_SERVER['PHP_SELF']."'>";
            echo "<input type='hidden' name='Username_id' value='".$row["Username_id"]."'>";
            echo "<input type='hidden' name='action' value='delete'>";
            echo "<input type='submit' value='Delete' style='background-color: #dc3545; color: #ffffff; border: none; padding: 8px 19px; border-radius: 5px; cursor: pointer;'>";
            echo "</form>";
            echo "</div>";
            echo "</td>";
            echo "</tr>";
            $userCount++; // Increment count
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "No records found.";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
    $conn = connectToDatabase();
    $action = $_POST['action'];
    $Username_id = $_POST['Username_id'] ?? '';

    if ($action == "update") {
        // Update user
        $Email = $_POST['Email'] ?? '';
        $Username = $_POST['Username'] ?? '';
        $Password = $_POST['Password'] ?? '';
        $sql = "UPDATE user_account SET Email=?, Username=?, Password=? WHERE Username_id=?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $Email, $Username, $Password, $Username_id);
        if ($stmt->execute()) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $stmt->error;
        }
        $stmt->close();
    } elseif ($action == "delete") {
        // Delete user
        $sql = "DELETE FROM user_account WHERE Username_id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $Username_id);
        if ($stmt->execute()) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $stmt->error;
        }
        $stmt->close();
    }

    $conn->close();
}

$conn = connectToDatabase();
displayUserData($conn);
?>