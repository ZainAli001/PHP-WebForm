<?php include 'connection.php'; ?>
<?php
$first_name = $_POST['first_name'];
$last_name = $_POST["last_name"];
$address = $_POST["address"];
$phone = $_POST["phone"];

$sql = "INSERT INTO contact (first_name, last_name, address, phone)
VALUES ('" . $first_name . "', '" . $last_name . "', '" . $address . "','" . $phone . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "SELECT id, first_name, last_name FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["first_name"] . " " . $row["last_name"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>