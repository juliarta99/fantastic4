<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "kelompok");

// funcionts registrasi
function comment($data) {
      global $conn;

      $nama = strtolower(stripcslashes($data["nama"]));
      $email = mysqli_real_escape_string($conn, $data["email"]);
      $comment = mysqli_real_escape_string($conn, $data["comment"]);

      // tambahkan user baru ke database
      mysqli_query($conn, "INSERT INTO comment VALUES('', '$nama', '$email', '$comment')");

      return mysqli_affected_rows($conn);
      // register end
}
?>