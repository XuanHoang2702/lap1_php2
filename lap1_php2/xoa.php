<?php
require_once "ketnoi.php";
if (isset($_GET['ma'])) {
  $ma = $_GET['ma'];
  $sql  = "DELETE FROM tours where id_tour = $ma";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  header("location: show.php?message=xóa thành công");
  die;
}
