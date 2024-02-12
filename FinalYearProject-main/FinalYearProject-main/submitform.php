<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hindiusmcalender2023";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "INSERT INTO contactmessages (name, email, message) VALUES ('$name', '$email', '$message')";

  if (mysqli_query($conn, $sql)) {
    echo "Message sent successfully!<br><br>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

$sql = "SELECT name, email, message, created_at FROM contactmessages ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<table class='table'>";
  echo "<tr><th>Name</th><th>Email</th><th>Message</th><th>Date</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['message'] . "</td>";
    echo "<td>" . $row['created_at'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  echo "<button class='button' onclick='goBack()'>Back</button>";
} else {
  echo "No messages found.";
}

mysqli_close($conn);
?>

<style>
.table {
  border-collapse: collapse;
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
}

.table th, .table td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

.table th {
  background-color: #f2f2f2;
}

.button {
  display: block;
  margin: 20px auto;
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.button:hover {
  background-color: #3e8e41;
}

</style>

<script>
function goBack() {
  window.history.back();
}
</script>

