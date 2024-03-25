<?php
include "db_conn.php";
$ID = $_GET["ID"];
$sql = "DELETE FROM `Company` WHERE ID = $ID";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}