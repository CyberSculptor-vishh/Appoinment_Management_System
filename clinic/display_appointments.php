<?php
$servername = "localhost";
$username = "root"; // replace with your database username if different
$password = ""; // replace with your database password if different
$dbname = "clinic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve records
$sql = "SELECT appointment_no, patient_name, phone_number, doctor, appointment_date FROM appointments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>Appointment No</th>
                <th>Patient Name</th>
                <th>Phone Number</th>
                <th>Doctor</th>
                <th>Appointment Date</th>
            </tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["appointment_no"] . "</td>
                <td>" . $row["patient_name"] . "</td>
                <td>" . $row["phone_number"] . "</td>
                <td>" . $row["doctor"] . "</td>
                <td>" . $row["appointment_date"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
